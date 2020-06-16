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



Route::get('/', 'DiariesController@main');
Route::get('/diaries/', 'DiariesController@index');
Route::get('/diaries/edit/{id}', 'DiariesController@edit');
Route::post('/diaries/new','DiariesController@new');
Route::get('/diaries/new',function () {
    return view('new');
});
Route::post('/diaries/{id}','DiariesController@save');
Route::get('/diaries/{id}', 'DiariesController@show');
Route::get('/diaries/delete/{id}', 'DiariesController@delete');





