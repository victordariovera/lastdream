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


Auth::routes();

// Pagina Principal
Route::get('/', 'DreamsController@home')->name('dreams.home');
// Crear una entrada nueva
Route::get('/dreams/create','DreamsController@create')->name('dreams.create');
// Ver una entrada en particular
Route::get('/dreams/{dream}', 'DreamsController@show')->name('dreams.show');
// Editar una entrada
Route::get('/dreams/{dream}/edit', 'DreamsController@edit')->name('dreams.edit');

// Ver todas las entradas
Route::get('/dreams/','DreamsController@index')->name('dreams.index');
// Guardar una entrada nueva
Route::post('/dreams/', 'DreamsController@store')->name('dreams.store');
// Borrar una entrada
Route::delete('/dreams/{dream}', 'DreamsController@delete')->name('dreams.delete');
// Actualizar una entrada
Route::patch('/dreams/{dream}', 'DreamsController@update')->name('dreams.update');




//Route::get('/home', 'HomeController@index')->name('home');
