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

    public function cartPurchase(Request $request){

        if(Auth::check()){
        
            if ($this->productsInSession) {

                // dd($this->productsInSession);

                $userId = Auth::user()->id;
                $order = new Order;
                $order->user_id = $userId;
                $order->total = 0;
                $order->save();

                $total = 0;
                // dd($this->productsInCart);
                foreach ($this->productsInCart as $product) {

                    // dd($product->description);
                   

                    $quantity = session('products')[$product->id];
                    $item = new Item;
                    $item->quantity = $quantity;
                    $item->price = $product->price;
                    $item->product_id = $product->id;
                    $item->order_id = $order->id;
                    $item->save();
                    $total = $total + ($product->price * $quantity);
                }

                // dd($item);

                $order->total = $total;
                $order->save();
                
                $newBalance = Auth::user()->balance - $total;
                Auth::user()->balance = $newBalance;
                Auth::user()->save();

                $request->session()->forget('products');

                session()->flash('status', 'Congratulation, purchase completed. Order Number is #'.$order->id);
                $this->redirect('/myaccount/orders', navigate: true);
            }   
        }
        else {
            session()->flash('statusNotLoggin', "You're not loggin. Please login first");
        }
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.cart');
    }
}
