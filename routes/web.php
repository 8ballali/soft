<?php

use Illuminate\Support\Facades\Route;

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

 Route::get('/guru', 'GuruController@index');

 Route::get('/guru/hapus/{id}', 'GuruController@hapus');

 Route::get('/guru/trash', 'GuruController@trash');

 Route::get('/guru/restore/{id}', 'GuruController@restore');

 Route::get('/guru/restore_all', 'GuruController@restore_all');

 Route::get('/guru/delete_permanent/{id}', 'GuruController@delete_permanent');

 Route::get('/guru/delete_permanent_all', 'GuruController@delete_permanent_all');

 Route::get('/guru/add', 'GuruController@add');

 Route::post('/guru/store', 'GuruController@store');

 Route::get('/guru/edit/{id}', 'GuruController@edit');

 Route::put('/guru/update/{$id}', 'GuruController@update');