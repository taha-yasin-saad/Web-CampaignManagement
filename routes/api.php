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
Route::post('/lead', 'api\LeadController@create_lead');
Route::get('/all_workplaces', 'api\LeadController@all_workplaces');
Route::post('/all_products', 'api\LeadController@all_products');

//User Routes
Route::post('/login', 'api\UserController@login');
Route::post('/login2', 'api\UserController@login2');
Route::post('/update_profile', 'api\UserController@update_profile');
Route::get('/all_leads', 'api\LeadController@all_leads');
