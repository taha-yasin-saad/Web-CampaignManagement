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
Route::any('/login2', 'Auth\RegisterController@login2');
Route::resource('/profile', 'UserController');

//workplaces
Route::resource('workplace', 'WorkplacesController');
Route::resource('product', 'ProductsController');
Route::get('product/create/{workplace_id}', 'ProductsController@create');
Route::post('/invite_member', 'ProductsController@invite_member');

//admins
Route::get('admin-login','Auth\AdminLoginController@showlogin')->name('admin-login');
Route::post('admin.login','Auth\AdminLoginController@login')->name('admin.login');
Route::view('leads','leads.leads');
Route::view('team','workplaces.team');
Route::get('phoneCode/{code}','AjaxController@phoneCode');
Route::group(['middleware' => 'auth.admin', 'prefix' => 'admin'], function(){
    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
});