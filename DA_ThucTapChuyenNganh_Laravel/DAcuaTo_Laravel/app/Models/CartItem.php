<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['cart_id','product_type','product_id','quantity','price'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        if ($this->product_type === 'video') {
            return $this->belongsTo(Video::class, 'product_id');
        }
        return null;
    }
}
