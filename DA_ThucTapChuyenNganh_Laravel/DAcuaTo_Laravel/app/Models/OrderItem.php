<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id','product_type','product_id','quantity','price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        if ($this->product_type === 'video') {
            return $this->belongsTo(Video::class, 'product_id');
        }
        return null;
    }
}
