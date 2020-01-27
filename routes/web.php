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


Auth::routes();

Route::get('/', 'HomeController@index');
Route::post('/first', 'auth\LoginController@firstlogin');
Route::post('/login2', 'auth\RegisterController@login2');

Route::resource('/profile', 'UserController');

Route::resource('mark', 'MarkController');