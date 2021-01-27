<?php 
namespace Prueba\Tests;

use Orchestra\Testbench\Factories\UserFactory as TestbenchUserFactory;

class UserFactory extends TestbenchUserFactory{
    protected $model = User::class;

    public function definition(){
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('5286721'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }
}