<?php
namespace Prueba\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Prueba\Console\LaravelPruebaCommand;
use Prueba\Console\LaravelPruebaGeneratorCommand;
use Prueba\Classes\LaravelPrueba;

class LaravelPruebaProvider extends ServiceProvider{
    
    public function register(){
        $this->app->bind('prueba',function($app){
            return new LaravelPrueba();
        });
        $this->mergeConfigFrom(__DIR__."/../../config/config.php","pruebalaravel");
    }

    public function boot(){
        if($this->app->runningInConsole()){
            $this->commands([
                LaravelPruebaCommand::class,
                LaravelPruebaGeneratorCommand::class,
            ]);
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('pruebalaravel.php'),
            ],'config');
            // if(!class_exists('CreatePostsTable')){
            //     $this->publishes([
            //         __DIR__.'/../database/migrations/create_posts_table.php.stub' => database_path('migrations/'.date('Y_m_d_His',time())."_create_posts_table.php")
            //     ],'migrations');
            // }
        }
        $this->loadMigrationsFrom(__DIR__."/../../database/migrations");
        $this->registerRoutes();
    }

    private function registerRoutes(){
        Route::group($this->routeConfiguration(),function(){
            $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        });
    }

    private function routeConfiguration(){
        return [
            'prefix' => config('pruebalaravel.prefix'),
            'middleware' => config('pruebalaravel.middleware'),
        ];
    }
}