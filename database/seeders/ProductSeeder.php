<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductModel;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
            'name' => 'TV',
            'description' => 'Best TV Ever',
            'image' => 'game.png',
            'image_path' => 'images/tv.png',
            'price' => 7000,
            ],
            [
               
                'name' => 'iPhone',
                'description' => 'Best iPhone Ever',
                'image' => 'submarine.jpg',
                'image_path' => 'images/iphone.png',
                'price' => 1000,
            ],
            [
                
                'name' => 'Chromecast',
                'description' => 'Best Chromecast Ever',
                'image' => 'safe.jpg',
                'image_path' => 'images/chromecast.jpg',
                'price' => 1000,
            ],
            [
               
                'name' => 'Glasses',
                'description' => 'Best Glasses Ever',
                'image' => 'game.png',
                'image_path' => 'images/glasses.png',
                'price' => 1000,
            ],
        ];

        foreach($products as $product){
            ProductModel::create($product);
        }
    }
}


