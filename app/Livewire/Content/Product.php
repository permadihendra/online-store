<?php

namespace App\Livewire\Content;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Product extends Component
{

    public $product_id;

    public $products_name, $products_desc, $products_image, $products_price;

    public $index;

    public $products = [];

    public $products_data = [
        // [
        //     'id' => '1',
        //     'name' => 'TV',
        //     'description' => 'Best TV Ever',
        //     'image' => 'game.png',
        //     'price' => 1000,
        // ],

        // [
        //     'id' => '2',
        //     'name' => 'iPhone',
        //     'description' => 'Best iPhone Ever',
        //     'image' => 'submarine.jpg',
        //     'price' => 1000,
        // ],

        // [
        //     'id' => '3',
        //     'name' => 'Chromecast',
        //     'description' => 'Best Chromecast Ever',
        //     'image' => 'safe.jpg',
        //     'price' => 1000,
        // ],

        // [
        //     'id' => '4',
        //     'name' => 'Glasses',
        //     'description' => 'Best Glasses Ever',
        //     'image' => 'game.png',
        //     'price' => 1000,
        // ],
    ];

    public function mount(){
        
      
    }
    public function showDetail($id){
        $name = array_column($this->products_data, 'id');
        $index = array_search($id, $name);

        $this->products_name = $this->products_data[$index]['name'];
        $this->products_desc = $this->products_data[$index]['description'];
        $this->products_image = $this->products_data[$index]['image'];
        $this->products_price = $this->products_data[$index]['price'];
    }


    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.product');
    }
}
