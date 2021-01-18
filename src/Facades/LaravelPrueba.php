<?php
namespace Prueba\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelPrueba extends Facade{
    
    protected static function getFacadeAccessor(){
        return "prueba";
    }
    
}