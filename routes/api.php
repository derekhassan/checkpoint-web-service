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


// These are the routes that require a token
Route::middleware('auth:api')->group(function() {

    //default Laravel route to return user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    //logout and destroys user tokens
    Route::post('/logout', 'AuthController@logout');

    //Creates a new transaction
    Route::post('/transaction', 'TransactionController@createTransaction');

    //Finds a transaction by user_id_shared and user_received
    Route::get('/transaction', 'TransactionController@findTransaction');

});

//New routes that use oauth
Route::post('/authlogin', 'AuthController@login');
Route::post('/authregister', 'AuthController@register');


//Legacy login system
//Route::middleware('api')->get('/test', 'LoginAPIController@makeAccount');
Route::middleware('api')->post('/auth/login', 'LoginAPIController@postLogin');
Route::middleware('api')->post('/auth/signup', 'LoginAPIController@postSignup');
Route::middleware('api')->get('/auth/getuser', 'LoginAPIController@getUserbyId');

//Route::middleware('api')->get('/auth/makeqrcode', 'CouponController@makeQRCode');
Route::middleware('api')->get('/coupon', 'CouponController@getQRInfo');
Route::middleware('api')->post('/coupon', 'CouponController@createCoupon');

Route::middleware('api')->post('/createbusiness', 'BusinessController@createBusiness');