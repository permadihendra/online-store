<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    //define spesific table
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'description'];
}
