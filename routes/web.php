<?php

use Illuminate\Support\Facades\Route;
use Prueba\Http\Controllers\PostsController;

Route::get('/posts',[PostsController::class,'index'])->name('laravelprueba.index');
Route::get('/posts/{id}',[PostsController::class,'show'])->name('laravelprueba.show');
Route::post('/posts',[PostsController::class,'store'])->name('laravelprueba.store');