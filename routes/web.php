<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Homepage\Home;
use App\Livewire\Homepage\Index;
use App\Livewire\Content\Product;
use App\Livewire\Admin\AdminProduct;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('/');

Route::get('/home', Index::class)->name('home');

Route::get('/about', function(){
    return view('components.homepage.about');
})->name('about');

Route::get('/product', Product::class)->name('product');


Route::get('admin', App\Livewire\Admin\Home::class)->name('admin'); // include with use namespace because class name is identical

Route::get('admin.products', AdminProduct::class)->name('admin.products');