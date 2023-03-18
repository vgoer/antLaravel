<?php

use Illuminate\Support\Facades\Route;

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

// 前台路由
Route::group(['namespace'=>'Home'],function(){

    Route::get('/','IndexController@index');
    Route::get('about','IndexController@about');
    Route::get('content','IndexController@content');

    // blogs
    Route::get('/blogs/create','BlogController@create');
    Route::post('/blogs/update','BlogController@store');
});