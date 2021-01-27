<?php
namespace Prueba\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Prueba\Models\Post;
use Prueba\Tests\User;

class PostFactory extends Factory
{
    protected $model = Post::class;


    public function definition(){

        $autor = User::factory()->create();
        return [
            'title' => $this->faker->words(3,true),
            'descripcion' =>  $this->faker->paragraph,
            'autor_id' => $autor->id,
            'autor_type' => get_class($autor),
        ];
    }
}