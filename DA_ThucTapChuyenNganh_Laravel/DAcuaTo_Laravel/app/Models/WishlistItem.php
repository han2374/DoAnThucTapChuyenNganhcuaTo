<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    protected $fillable = ['wishlist_id','product_type','product_id'];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function product()
    {
        if ($this->product_type === 'video') {
            return $this->belongsTo(Video::class, 'product_id');
        }
        return null;
    }
}
