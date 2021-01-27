<?php
namespace Prueba\Tests\Unit;
use Prueba\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Prueba\Models\Post;

class PostTest extends TestCase{

    use RefreshDatabase;

    /**
     * @test
     */
    function a_post_has_title(){
        $post = Post::factory()->create(['title' => 'A chicken']);
        $this->assertEquals("A chicken",$post->title);
    }

    /**
     * @test
     */
    function a_post_has_description(){
        $post = Post::factory()->create(['descripcion' => 'Hola a todos']);
        $this->assertEquals("Hola a todos",$post->descripcion);
    }

    /**
     * @test
     */
    function a_post_has_autor(){
        $post = Post::factory()->create(['autor_id'=>99]);
        $this->assertEquals(99,$post->autor_id);
    }
}