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


Route::get('/unpaidall/{id}',['as'=>'404','uses'=>'Api\apiController@unpaid_all']);
Route::get('/unpaidallstates/{id}',['as'=>'404','uses'=>'Api\apiController@unpaid_all_states']);
Route::get('/unpaidcity/{id}/{city}',['as'=>'404','uses'=>'Api\apiController@unpaid_city']);
Route::get('/unpaidstates/{id}/{states}',['as'=>'404','uses'=>'Api\apiController@unpaid_states']);
Route::get('/totalcustomers/{id}',['as'=>'404','uses'=>'Api\apiController@total_customers']);
Route::get('/customerscity/{id}/{city}',['as'=>'404','uses'=>'Api\apiController@customers_city']);
Route::get('/customersstates/{id}/{states}',['as'=>'404','uses'=>'Api\apiController@customers_states']);