<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

Route::get('/', function () {
    return view('welcome');
});

//Ruta de prueba 
/*Route::get('/greeting', function (){
    return "Hi, I'm Fabio and now 'im practices Laravel's routes!!";
});*/

//Nueva ruta con controlador pre-definido 
Route::get('/greeting',[GreetingController::class,'greeting']);

//Ruta para Inicio de sesión
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
