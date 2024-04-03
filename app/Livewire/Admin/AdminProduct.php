<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Str;
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
            'file' => 'required|image',
        ]);

        //Upload file to storage/images and get the filename url
        $name = Str::slug($this->name);
        $extension = $this->file->extension();
        $name_ex = $name.'.'.$extension;
        $path = $this->file->storeAs('images', $name_ex, 'public');

        ProductModel::create([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $name_ex,
            'image_path' => $path,
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
