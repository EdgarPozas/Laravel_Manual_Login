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

Route::get('/',"IndexController@index");
Route::post('/logout',"IndexController@logout");

Route::get('/login',"LoginController@index");
Route::post('/login',"LoginController@login");

Route::get('/register',"RegisterController@index");
Route::post('/register',"RegisterController@register");