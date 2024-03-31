<?php

namespace App\Livewire\Content;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Product extends Component
{

    public $products_data = [
        [
            'id' => '1',
            'name' => 'TV',
            'description' => 'Best TV Ever',
            'image' => 'game.png',
            'price' => 1000,
        ],

        [
            'id' => '2',
            'name' => 'iPhone',
            'description' => 'Best iPhone Ever',
            'image' => 'game.png',
            'price' => 1000,
        ],

        [
            'id' => '3',
            'name' => 'Chromecast',
            'description' => 'Best Chromecast Ever',
            'image' => 'game.png',
            'price' => 1000,
        ],

        [
            'id' => '4',
            'name' => 'Glasses',
            'description' => 'Best Glasses Ever',
            'image' => 'game.png',
            'price' => 1000,
        ],
    ];


    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.content.product');
    }
}
