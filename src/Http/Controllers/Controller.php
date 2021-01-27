<?php

namespace Prueba\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequest;

class Controller extends BaseController{
    use DispatchesJobs,ValidatesRequest,AuthorizesRequest;
    
}