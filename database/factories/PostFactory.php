<?php
namespace Prueba\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Prueba\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(){
        return [
            'title' => $this->faker->words(3,true),
            'descripcion' =>  $this->faker->paragraph,
            'autor_id' => 999,
            'autor_type' => '',
        ];
    }
}