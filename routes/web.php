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

Route::get('/', 'CrudController@index');
Route::get('/add', 'CrudController@addnew');
Route::post('/simpan', 'CrudController@create');
Route::get('/list', 'CrudController@list');
Route::get('/edit/{id?}', 'CrudController@edit');
Route::post('/update/{id?}', 'CrudController@update');
Route::post('/hapus', 'CrudController@delete');