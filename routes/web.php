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



// Pagina Principal
Route::get('/', 'DreamsController@home');
// Editar una entrada
Route::get('/dreams/{id}/edit', 'DreamsController@edit');
// Crear una entrada nueva
Route::get('/dreams/create','DreamsController@create');
// Ver todas las entradas
Route::get('/dreams/','DreamsController@index');
// Guardar una entrada nueva
Route::post('/dreams/', 'DreamsController@store');
// Actualizar una entrada
Route::patch('/dreams/{id}', 'DreamsController@update');
// Ver una entrada en particular
Route::get('/dreams/{id}', 'DreamsController@show');
// Borrar una entrada
Route::delete('/dreams/{id}', 'DreamsController@delete');
