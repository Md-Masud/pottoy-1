<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::group(['middleware'=>'auth', 'namespace' => 'App\Http\Controllers\Frontend'], function(){
    Route::get('/', 'FrontendController@index')->name('index');
});
