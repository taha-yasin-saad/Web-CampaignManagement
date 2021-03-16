<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('password/email', 'api\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'api\ResetPasswordController@reset');

Route::post('widgetView/widget', 'api\LeadController@widget_ajax');
Route::post('/lead', 'api\LeadController@create_lead');
Route::get('/all_workplaces', 'api\LeadController@all_workplaces');
Route::post('/all_products', 'api\LeadController@all_products');

//User Routes
Route::post('/login', 'api\UserController@login');
Route::post('/login1', 'api\UserController@login1');
Route::post('/login2', 'api\UserController@login2');
Route::post('/logout', 'api\UserController@logout');
Route::post('/update_profile', 'api\UserController@update_profile');
Route::post('/change_is_available', 'api\UserController@change_is_available');
Route::get('/all_leads', 'api\LeadController@all_leads');
Route::get('/user_leads/{user}', 'api\LeadController@user_leads');
Route::post('/qualified', 'api\LeadController@qualified');
Route::get('/last_contact/{lead}', 'api\LeadController@last_contact');
Route::post('/test_notification_user', 'api\LeadController@test_notification_user');
Route::post('/test_notification_device', 'api\LeadController@test_notification_device');
