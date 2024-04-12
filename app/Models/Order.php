<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\item;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 'user_id'
    ];

    public static function validate($request){
        $request->validate([
            'total' => 'required|numeric',
            'user_id' => 'required|exist:users,id',
        ]);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function items() :HasMany
    {
        return $this->hasMany(Item::class);
    }
}
