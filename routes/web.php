<?php

use App\Livewire\Homepage\Home;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);