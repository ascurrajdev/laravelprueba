<?php
namespace Prueba\Tests;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Prueba\Providers\LaravelPruebaProvider;

class TestCase extends OrchestraTestCase{
    public function setUp():void
    {
        parent::setUp();
    }

    // protected function getPackageProviders($app){
    //     return [
    //         LaravelPruebaProvider::class
    //     ];
    // }

    protected function getEnvironmentSetUp($app){
        require_once __DIR__.'/../database/migrations/create_posts_table.php.stub';
        require_once __DIR__.'/../database/migrations/create_users_table.php.stub';

        (new \CreatePostsTable)->up();
        (new \CreateUsersTable)->up();
    }
}