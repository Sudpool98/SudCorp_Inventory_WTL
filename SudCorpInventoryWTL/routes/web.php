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

Route::get('/',"App\Http\Controllers\AuthenticationController@checkNoSession");
Route::post('/',"App\Http\Controllers\AuthenticationController@loginAuth");
Route::get('/login',"App\Http\Controllers\AuthenticationController@checkSession");
Route::get('/logout',"App\Http\Controllers\AuthenticationController@logout");

Route::post('/register',"App\Http\Controllers\IUserController@store");
Route::get('/register',"App\Http\Controllers\IUserController@create");

Route::get('/inventory',"App\Http\Controllers\ItemsController@index");
Route::get('/new',"App\Http\Controllers\ItemsController@create");
Route::post('/new',"App\Http\Controllers\ItemsController@store");
Route::get('/edit/{id}',"App\Http\Controllers\ItemsController@edit");
Route::put('/edit/{id}',"App\Http\Controllers\ItemsController@update");
Route::delete('/delete/{id}', "App\Http\Controllers\ItemsController@destroy");