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
    return view('users.login');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
//Route::get('/home', 'LoginController@home');
Route::get('/logout', 'LoginController@logout');
Route::post('/logout', 'LoginController@logout');


//send money
Route::get('/send-money', 'SwifinPaymentController@create');
Route::post('/send-money', 'SwifinPaymentController@store');
Route::get('/send-money/bulk', 'SwifinPaymentController@bulk');
Route::post('/send-money/bulk', 'SwifinPaymentController@storeBulk');
Route::post('/send-money/confirm', 'SwifinPaymentController@confirmTransaction');
//Route::post('/send-money/bulk', 'SwifinPaymentController@storeBulk');

//topup
Route::get('/topup/swifin', 'TopupController@swifin');
Route::get('/mobile-money-topup', 'MobileMoneyDepositsController@create');
Route::get('/topup/card/master-card', 'TopupController@swifin');
Route::get('/topup/card/visa-card', 'TopupController@swifin');
Route::get('/topup/card/american-express', 'TopupController@swifin');
Route::get('/topup/card/union-pay', 'TopupController@swifin');
Route::post('/mobile-money-topup', 'MobileMoneyDepositsController@store');

//transfer funds
Route::get('/swifin-to-mobile-money-transfer', 'SwifinToMobileMoneyTransfersController@create');
Route::post('/swifin-to-mobile-money-transfer', 'SwifinToMobileMoneyTransfersController@store');

//pay bils
//umeme
Route::get('/paybills/umeme/yaka', 'UmemeBillsController@umemeYaka');
Route::get('/paybills/umeme/postpaid', 'UmemeBillsController@umemePostPaid');
Route::post('/paybills/umeme/yaka', 'UmemeBillsController@storeUmemeYaka');
Route::post('/paybills/umeme/postpaid', 'UmemeBillsController@storeUmemePostPaid');
//water
Route::get('/paybills/water', 'WaterBillsController@create');
Route::post('/paybills/water', 'WaterBillsController@store');
//tv subscription
Route::get('/paybills/dstv', 'TvSubscriptionsController@payDstv');
Route::get('/paybills/gotv', 'TvSubscriptionsController@payGotv');
Route::get('/paybills/startimes', 'TvSubscriptionsController@payStartimes');
Route::get('/paybills/zukutv', 'TvSubscriptionsController@payZukutv');
Route::post('/paybills/dstv', 'TvSubscriptionsController@storePayDstv');
Route::post('/paybills/gotv', 'TvSubscriptionsController@storePayGotv');
Route::post('/paybills/startimes', 'TvSubscriptionsController@storePayStartimes');
Route::post('/paybills/zukutv', 'TvSubscriptionsController@storePayZukutv');
//buy airtime
Route::get('/buy/airtime', 'AirtimeBundlesController@create');
Route::post('/buy/airtime', 'AirtimeBundlesController@store');
Route::get('/buy/airtime/bulk', 'AirtimeBundlesController@bulk');
Route::post('/buy/airtime/bulk', 'AirtimeBundlesController@storeBulk');
//buy internet
Route::get('/buy/internet', 'InternetBundlesController@create');
Route::post('/buy/internet', 'InternetBundlesController@store');
