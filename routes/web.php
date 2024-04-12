<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Homepage\Home;
use App\Livewire\Homepage\Index;
use App\Livewire\Content\Product;
use App\Livewire\Content\Cart;
use App\Livewire\Admin\AdminProduct;
use App\Livewire\Content\MyAccount;

// use App\Http\Middleware\AdminAuthMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('/');

Route::get('/home', Index::class)->name('home');

Route::get('/about', function(){
    return view('components.homepage.about');
})->name('about');

Route::get('/product', Product::class)->name('product');
Route::get('/cart', Cart::class)->name('cart');

Route::middleware('admin')->group(function(){
    Route::get('admin', App\Livewire\Admin\Home::class)->name('admin'); // include with use namespace because class name is identical
    Route::get('admin.products', AdminProduct::class)->name('admin.products');
});

Route::middleware('auth')->group(function(){
    Route::get('myaccount/orders', MyAccount::class)->name('myaccount.orders');
});

Route::get('test', App\Livewire\Test\Index::class)->name('test');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
