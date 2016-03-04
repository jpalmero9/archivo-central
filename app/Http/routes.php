<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return Redirect::to('/login');
});


Route::resource('ingresos','ingresosController');
Route::resource('diagnosticos','diagnosticosController');
Route::resource('ficha','fichaController');
Route::resource('usuarios','usuariosController');
Route::resource('login','loginController');




