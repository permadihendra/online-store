<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Homepage\Home;
use App\Livewire\Homepage\Index;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('/');

Route::get('/home', Index::class)->name('home');

Route::get('/about', function(){
    return view('components.homepage.about');
})->name('about');