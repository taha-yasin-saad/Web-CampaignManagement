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

//users
Auth::routes();
Route::get('/', 'HomeController@index');
Route::any('/first', 'Auth\LoginController@firstlogin');
Route::post('/login2', 'Auth\RegisterController@login2');
Route::resource('/profile', 'UserController');

//workplaces
Route::resource('workplace', 'WorkplacesController');
Route::resource('product', 'ProductsController');
Route::get('product/create/{workplace_id}', 'ProductsController@create');
Route::post('/invite_member', 'ProductsController@invite_member');