<?php

namespace App\Livewire\Content;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\ProductModel;

class Product extends Component
{

    public $product_id;

    public $products_name, $products_desc, $products_image, $products_price;

    public $index;

    public $products;

    public $products_data;

    public function mount(){
        $this->products_data = ProductModel::all();
    }
    public function showDetail($id){
        
        $products = ProductModel::findOrFail();

        $this->products_name = $this->products->name;
        $this->products_desc = $this->products->description;
        $this->products_image = $this->products->image;
        $this->products_price = $this->products->price;
    }


    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.product');
    }
}
