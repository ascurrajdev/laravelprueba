<?php
namespace Prueba\Tests;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Prueba\Traits\HasPosts;

class User extends Model implements AuthenticatableContract, AuthorizableContract{
    use HasPosts, Authenticatable, Authorizable, HasFactory;
    protected $guarded = [];
    protected $table = "users";
    protected static function newFactory(){
        return UserFactory::new();
    }
}