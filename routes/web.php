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


Route::group(['prefix' => 'html5', 'middleware' => []], function () {

    Route::get('/index', 'Html5\IndexController@index')->middleware('wechat.oauth');

    Route::get('/index2', 'Html5\IndexController@index2')->middleware('wechat.oauth:snsapi_userinfo');

});





