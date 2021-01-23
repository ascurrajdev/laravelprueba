<?php
namespace Prueba\Providers;

use Illuminate\Support\ServiceProvider;
use Prueba\Console\LaravelPruebaCommand;
use Prueba\Console\LaravelPruebaGeneratorCommand;
use Prueba\Classes\LaravelPrueba;

class LaravelPruebaProvider extends ServiceProvider{
    
    public function register(){
        $this->app->bind('prueba',function($app){
            return new LaravelPrueba();
        });
    }

    public function boot(){
        if($this->app->runningInConsole()){
            $this->commands([
                LaravelPruebaCommand::class,
                LaravelPruebaGeneratorCommand::class,
            ]);
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pruebalaravel.php'),
            ],'config');
            if(!class_exists('CreatePostsTable')){
                $this->publishes([
                    __DIR__.'/../database/migrations/create_posts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His',time())."_create_posts_table.php")
                ],'migrations');
            }
        }
        $this->mergeConfigFrom(__DIR__."/../config/config.php","pruebalaravel");
    }
}