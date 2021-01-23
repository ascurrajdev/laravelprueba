<?php
namespace Prueba\Console;

use Illuminate\Console\Command;

class LaravelPruebaCommand extends Command{

    protected $signature = "laravel-prueba:install";

    protected $description = "Comando para instalar el paquete de prueba para laravel";

    public function handle(){
        $this->info('Instalando el paquete de prueba para laravel');
        $this->call('vendor:publish',[
            '--provider' => 'Prueba\Providers\LaravelPruebaProvider',
            '--tag' => 'config',
        ]);
        $this->call('vendor:publish',[
            '--provider' => 'Prueba\Providers\LaravelPruebaProvider',
            '--tag' => 'migrations'
        ]);
        $this->info('El paquete ha sido instalado correctamente');
    }
}