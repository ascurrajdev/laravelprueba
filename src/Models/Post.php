<?php

namespace Prueba\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','descripcion'
    ];
    public function autor(){
        return $this->morphTo();
    }
    protected static function newFactory(){
        return \Prueba\Database\Factories\PostFactory::new();
    }
}
