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

Route::post('/authlogin', 'AuthController@login');
Route::post('/authregister', 'AuthController@register');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

Route::middleware('api')->post('/auth/login', 'LoginAPIController@postLogin');
//This is located in app/Http/Controllers

Route::middleware('api')->get('/test', 'LoginAPIController@makeAccount');
//Makes test account

Route::middleware('api')->post('/auth/createtransaction', 'TransactionController@createTransaction');
Route::middleware('api')->get('/auth/findtransaction', 'TransactionController@findTransaction');

Route::middleware('api')->post('/auth/signup', 'LoginAPIController@postSignup');
Route::middleware('api')->get('/auth/getuser', 'LoginAPIController@getUserbyId');

Route::middleware('api')->get('/auth/makeqrcode', 'CouponController@makeQRCode');
Route::middleware('api')->get('/auth/getqrcode', 'CouponController@getQRInfo');
Route::middleware('api')->post('/auth/createcoupon', 'CouponController@createCoupon');

Route::middleware('api')->post('/auth/createbusiness', 'BusinessController@createBusiness');