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

Route::get('/login',[
	"middleware"=>"login",
	"uses"=>"LoginController@index"
]);
Route::post('/login',[
	"middleware"=>"login",
	"uses"=>"LoginController@login"
]);

Route::get('/register',[
	"middleware"=>"login",
	"uses"=>"RegisterController@index"
]);
Route::post('/register',[
	"middleware"=>"login",
	"uses"=>"RegisterController@register"
]);