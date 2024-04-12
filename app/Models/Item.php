<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Order;
use App\Models\ProductModel;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity', 'price', 'product_id', 'order_id',
    ];

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product(){
        return $this->belongsTo(ProductModel::class, 'product_id');
    }

}
