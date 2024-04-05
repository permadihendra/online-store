<?php

namespace App\Livewire\Test;

use Livewire\Component;
use Livewire\Attributes\Layout;

use App\Models\ProductModel;

class Index extends Component
{

    public $name, $description;
    public ProductModel $product;

    public function save(ProductModel $product){
        
        // $this->product = $product;
        // $this->name = $product->name;
        // $this->description = $product->description;

        dd($this->description);
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.test.index');
    }
}
