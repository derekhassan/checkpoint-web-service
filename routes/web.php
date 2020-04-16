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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createcoupon', 'PagesController@createcoupon');

//might need to fix web route
Route::resource('coupon', 'CouponController'); //can now reference functions like qrcode.store
Route::resource('business', 'BusinessController'); //can now reference functions like qrcode.store
