<?php

namespace App\Livewire\Content;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductModel;
use App\Models\Order;
use App\Models\Item;

class Cart extends Component
{
    public $total =0;
    public $productsInCart = [];
    public $productsInSession;

    function mount(Request $request){
        $this->productsInSession = $request->session()->get('products');
        if ($this->productsInSession){
            $this->productsInCart = ProductModel::findMany(array_keys($this->productsInSession));
            $this->total = $this->getTotalPrices($this->productsInCart, $this->productsInSession);
            // dd($this->productsInSession, $this->productsInCart, $this->total);
        }
    }

    public function getTotalPrices($products, $productsInSession){

        $total = 0;
            foreach($products as $product){
                $total = $total + ($product->price * $productsInSession[$product->id]);
            }
            return $total;
    }

    public function cartDelete(Request $request){
        $request->session()->forget('products');
        $this->redirect('/product', navigate:true);
    }

    public function cartPurchase(){

        // dd(Auth::user()->id);
        if ($this->productsInSession) {
            $userId = Auth::user()->id;
            $order = new Order;
            $order->user_id = $userId;
            $order->total = 0;
            $order->save();
            session()->flash('status', 'Congratulation, purchase completed. Order Number is '.$userId);
        }
        
        
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.cart');
    }
}
