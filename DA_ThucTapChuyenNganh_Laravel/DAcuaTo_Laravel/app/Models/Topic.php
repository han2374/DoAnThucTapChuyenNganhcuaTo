<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';
    protected $fillable = ['id','name','image','status'];

    public function videos()
    {
        return $this->hasMany(Video::class, 'idtopic', 'id');
    }
}
