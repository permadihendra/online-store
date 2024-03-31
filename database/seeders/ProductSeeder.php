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
            'price' => 7000,
            ],
            [
               
                'name' => 'iPhone',
                'description' => 'Best iPhone Ever',
                'image' => 'submarine.jpg',
                'price' => 1000,
            ],
            [
                
                'name' => 'Chromecast',
                'description' => 'Best Chromecast Ever',
                'image' => 'safe.jpg',
                'price' => 1000,
            ],
            [
               
                'name' => 'Glasses',
                'description' => 'Best Glasses Ever',
                'image' => 'game.png',
                'price' => 1000,
            ],
        ];

        foreach($products as $product){
            ProductModel::create($product);
        }
    }
}


