<?php
namespace Prueba\Traits;
use Prueba\Models\Post;

trait HasPosts{
    public function posts(){
        return $this->morphToMany(Post::class,'autor');
    }
}