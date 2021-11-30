<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function(){
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/product/details', 'FrontendController@details')->name('details');
    Route::get('/user/login', 'FrontendController@userLogin')->name('user.login');
    Route::get('/user/register', 'FrontendController@userRegister')->name('user.register');

});
