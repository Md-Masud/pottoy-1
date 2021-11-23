<?php
use Illuminate\Support\Facades\Route;


// admin route
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function(){
    Route::resource('category', 'CategoryController');
    Route::resource('brand','BrandController');
    Route::resource('warehouse','WarehouseController');
    Route::resource('pickup_point','PickupPointController');
    Route::resource('product','ProductController');


});

Route::get('cat',[App\Http\Controllers\Admin\ProductController::class,'cat']);
