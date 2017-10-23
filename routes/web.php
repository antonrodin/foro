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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/temas', 'TemasController@index')->name('temas');
Route::get('/temas/{tema}', 'TemasController@show')->name('temas.show');
Route::post('/temas/{tema}/responder', 'RespuestaController@store')->name('respuesta.store');

