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


Route::get('/', 'App\Http\Controllers\UserController@index')->name('user.home');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user.index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store'); 
