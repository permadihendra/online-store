<?php

namespace App\Livewire\Content;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\ProductModel;

class Product extends Component
{

    public $title = '';

    public $product_id;

    public $products_name, $products_desc, $products_image, $products_price;

    public $products;

    public $products_data;

    public function setTitle($title){
        return $this->title = $title;
    }

    public function mount(){
        // Preload Data Products and pass it to view with foreach
        $this->products_data = ProductModel::all();
    }

    // Function for show detail one products by id
    public function showDetail($id){
    $this->products = ProductModel::findOrFail($id);
    // dd($this->products->name);
    
        $this->products_name = $this->products->name;
        $this->products_desc = $this->products->description;
        $this->products_image = $this->products->image;
        $this->products_price = $this->products->price;
        
        $this->setTitle($this->products_name);

    }


    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.product')->title('Products');
    }
}
