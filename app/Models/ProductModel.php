<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    //define spesific table
    protected $table = 'products';

    // protected $fillable = ['name', 'price', 'description', 'image', 'image_path'];
    protected $guarded = ['id', 'created_at','updated_at'];
}
