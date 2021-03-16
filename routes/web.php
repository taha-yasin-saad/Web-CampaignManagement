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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth
Auth::routes();
Route::get('/', 'HomeController@index');
Route::any('/first', 'Auth\LoginController@firstlogin');
Route::any('/login2', 'Auth\RegisterController@login2');
Route::resource('/profile', 'UserController');
Route::get('/check', 'HomeController@check');
Route::get('/dashboard', 'UserController@dashboard');

//workplaces
Route::resource('workplace', 'WorkplacesController');
Route::get('invited_workplaces', 'WorkplacesController@invited_workplaces');
Route::get('user_workplaces', 'WorkplacesController@user_workplaces');
Route::get('{workplace_id}/team', 'WorkplacesController@team');
Route::get('{workplace_id}/team/{product_id}', 'WorkplacesController@product_team');
Route::get('invite/{workplace}', 'WorkplacesController@invite');
Route::post('/invite_member_workplace', 'WorkplacesController@invite_member_workplace');
Route::post('/edit_user_role', 'WorkplacesController@edit_user_role');
Route::get('remove_user_from_workspace/{user_id}/{workplace_id}', 'WorkplacesController@remove_user_from_workspace');
Route::get('active_user_in_workspace/{status}/{user_id}/{workplace_id}', 'WorkplacesController@active_user_in_workspace');

// Products
Route::resource('product', 'ProductsController');
Route::get('{workplace_id}/products', 'ProductsController@index');
Route::get('product/create/{workplace_id}', 'ProductsController@create');
Route::post('/invite_member', 'ProductsController@invite_member');
Route::post('/choose_members', 'ProductsController@choose_members');
Route::post('/add_product_to_user', 'ProductsController@add_product_to_user');

// leads
Route::resource('leads', 'LeadController');
Route::post('leads', 'LeadController@index');


//admins
Route::get('admin-login', 'Auth\AdminLoginController@showlogin')->name('admin-login');
Route::post('admin.login', 'Auth\AdminLoginController@login')->name('admin.login');

//leads Sources
Route::resource('sources', 'SourceController');

// widgetView
Route::get('widget/{id}', 'WidgetController@widget');
Route::post('widgetView/widget', 'WidgetController@widget_ajax');
Route::get('widgetView/{id}', 'HomeController@widgetView');

// Ajax
Route::get('phoneCode/{code}', 'AjaxController@phoneCode');
Route::get('isoCode/{code}', 'AjaxController@isoCode');

Route::group(['middleware' => 'auth.admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/view_exceptions', 'AdminController@view_exceptions');
    Route::resource('email_log', 'EmailLogController');
    Route::resource('moderator', 'ModeratorController');
    Route::resource('zone', 'ZoneController');
    Route::resource('user', 'UserController');
    Route::resource('workplace', 'WorkplacesController');
    Route::resource('lead', 'LeadController');
    Route::get('workplace-info/{workplace_id}', 'WorkplacesController@getWorkplaceInfo');
    Route::get('{workplace_id}/team/{product_id}', 'WorkplacesController@product_team');
    Route::post('workplace', 'WorkplacesController@index');
    Route::post('user', 'UserController@index');
    Route::post('lead', 'LeadController@index');
    Route::get('user_available/{user}/{is_available}', 'UserController@user_available');
    Route::get('user_status/{user}/{status}', 'UserController@user_status');
    // Route::get('product_leads/{product_id}', 'LeadController@product_leads');
    // Route::post('user_ajax', 'UserController@user_ajax');
});


// Code Draft

// Route::get('design', function () {
//     return view('sources.design');
// });

// Route::get('design', 'HomeController@design');

// Route::get('widgetView/{id}', function ($id) {
//     return view('sources/widgetView', compact('id'));
// });
// Route::view('team', 'workplaces.team');
// Route::view('leads','leads.leads');
