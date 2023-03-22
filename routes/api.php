<?php

use Illuminate\Support\Facades\Route;

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

// 后台路由
Route::group(['namespace'=> 'Admin'],function(){
    // 用户登录路由
    Route::get('/user/login','UserController@login');





});
