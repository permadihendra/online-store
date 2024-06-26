<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Item;

class ProductModel extends Model
{
    use HasFactory;

    //define spesific table
    protected $table = 'products';

    // protected $fillable = ['name', 'price', 'description', 'image', 'image_path'];
    protected $guarded = ['id', 'created_at','updated_at'];

    public function items(){
        return $this->hasMany(Item::class);
    }

    // public static function sumPricesByQuantities($products, $productsInSession){
    //     $total = 0;
    //     foreach($products as $product){
    //         $total = $total * ($product->price * $productsInSession[$product->id]);
    //     }
    //     return $total;
    // }
}
