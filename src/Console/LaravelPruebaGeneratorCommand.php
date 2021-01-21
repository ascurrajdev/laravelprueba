<?php
namespace Prueba\Console;

use Illuminate\Console\GeneratorCommand;

class LaravelPruebaGeneratorCommand extends Command{

    protected $name = "make:prueba";
    
    protected $description = "Clase de comando para pruebas de generacion de clases a traves de comandos";

    protected $type = 'LaravelPrueba';

    protected function getStub(){
        return __DIR__.'/stubs/laravelprueba.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace){
        return $rootNamespace.'\Pruebas';
    }

    public function handle(){
        parent::handle();

        $this->doOtherOperations();
    }

    protected function doOtherOperations(){
        $class = $this->qualifyClass($this->getNameInput());

        $path = $this->getPath($class);

        $contents = file_get_contents($path);

        file_put_contents($path,$contents);
    }
}