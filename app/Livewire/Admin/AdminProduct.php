<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

use App\Models\ProductModel;

class AdminProduct extends Component
{

    public $name, $price, $description;

    public $products;

    public function mount(){
        $this->products = ProductModel::get();
    }

    public function store(){
       
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        ProductModel::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        session()->flash('status', 'Product successfully created.');

        $this->redirect('admin.products');

    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admin-product');
    }
}
