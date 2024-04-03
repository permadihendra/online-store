<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

use App\Models\ProductModel;

class AdminProduct extends Component
{
    use WithFileUploads;

    public $name, $price, $description, $image, $file;

    public $products;

    public function mount(){
        $this->products = ProductModel::get();
    }

    public function store(){
       
        $this->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
            'file' =>'image|max:2048',
        ]);

        //Upload file to storage/images and get the filename url
        $name = $this->file->getClientOriginalName();
        $path = $this->file->storeAs('images', $name, 'public');

        $this->image = $path;

        ProductModel::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $name,
            
        ]);

       

        

        session()->flash('status', 'Product successfully created.');

        $this->redirect('admin.products', navigate: true);

    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admin-product');
    }
}
