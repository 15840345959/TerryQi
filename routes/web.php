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


Route::group(['prefix' => 'html5', 'middleware' => ['wechat.oauth']], function () {

    Route::get('/index', 'Html5\IndexController@index');        //投票大赛错误页面

});





