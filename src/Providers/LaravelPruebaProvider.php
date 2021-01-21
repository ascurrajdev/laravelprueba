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
            ]);
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pruebalaravel.php'),
            ],'config');
        }
        $this->mergeConfigFrom(__DIR__."/../config/config.php","pruebalaravel");
    }
}