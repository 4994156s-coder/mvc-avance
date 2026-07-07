<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function (){
return 'hola pagina contact';
});

Route::get('/about', function (){
return 'hola pagina acerca de';
});

Route::get('/courses/:slug', function ($slug){
return 'el curso es:'. $slug;
});


Route::dispatch();