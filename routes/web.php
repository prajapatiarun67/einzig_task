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

Route::any('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/user/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('user.edit');
Route::post('/user/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update'); 
Route::post('/user/destroy', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');
Route::get('/user/export', 'App\Http\Controllers\UserController@export')->name('user.export'); 
Route::post('/user/import', 'App\Http\Controllers\UserController@import')->name('user.import'); 
Route::post('/user/get_user', 'App\Http\Controllers\UserController@get_user')->name('user.get_user');
