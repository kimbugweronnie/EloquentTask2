<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /** @use HasFactory<\Database\Factories\CartItemFactory> */
    use HasFactory;
    protected $fillable = ['order_id', 'product', 'price', 'quantity'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
