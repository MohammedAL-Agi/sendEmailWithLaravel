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

Route::resource('/', 'UserController');

Route::post('store', 'UserController@store');

Route::post('update', 'FeelingController@update');

Route::post('updateService', 'ServiceController@updateService');

Route::get('mail', 'EmailController@mail');
