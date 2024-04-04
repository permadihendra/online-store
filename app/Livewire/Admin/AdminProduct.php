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

    public $name, $price, $description, $image, $file, $form_title;

    public $products, $products_edit;

    public $editMode = false;
    
    public function mount(){
        $this->form_title = "Create Product";
        $this->products = ProductModel::get();
    }

    public function store(){
       
        $this->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
            'file' => 'required|image|max:1024',
        ]);

        //Upload file to storage/images and get the filename url
        $name = Str::slug($this->name); //make a slug from data name, for naming the uploaded file
        $extension = $this->file->extension(); // get the uploaded file extension
        $name_ex = $name.'.'.$extension; // concantenate file name and extension
        $path = $this->file->storeAs('images', $name_ex, 'public'); // store file in "images" folder public 

        //insert data to database
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

    public function edit($id){
        $this->form_title = "Edit Products";
        $this->editMode = true;

        $products = ProductModel::findOrFail($id);

        $this->name = $products->name;
        $this->price = $products->price;
        $this->description = $products->description;
        $this->file = $products->image_path;

    }

    public function cancel(){
        $this->editMode = false;
        $this->redirect('admin.products', navigate: true);

    }

    public function update($id){

    }

    public function delete($id){

        ProductModel::destroy($id);
        session()->flash('status', 'Product successfully deleted!.');
        $this->redirect('admin.products', navigate:true);
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.admin-product');
    }
}
