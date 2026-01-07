<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $fillable = ['id','title','slug','image','video','content','description','price','status','idtopic'];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'idtopic', 'id');
    }
}
