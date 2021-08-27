<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// generar token 419 page expired
Route::get('/token', function (){
    return csrf_token();
});

Route::get('/mostrar', "ProductoController@mostrar");
Route::post('/delete', "ProductoController@delete");
Route::post('/guardar', "ProductoController@guardar");
