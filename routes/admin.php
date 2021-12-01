<?php
use Illuminate\Support\Facades\Route;


// admin route
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function(){
    Route::resource('category', 'CategoryController');
    Route::resource('sub-category', 'SubCategoryController');
    Route::resource('brand','BrandController');
    Route::resource('warehouse','WarehouseController');
    Route::resource('pickup_point','PickupPointController');
    Route::resource('product','ProductController');
    Route::resource('campaign','CampaignController');
    Route::get('setting/show','SettingController@index')->name('setting.show');
    Route::post('setting/edit/{id}','SettingController@webside_setting')->name('setting.edit');



});
Route::get('product/not-featured/{id}',[App\Http\Controllers\Admin\ProductController::class,'notfeatured']);
Route::get('product/active-featured/{id}',[App\Http\Controllers\Admin\ProductController::class,'activefeatured']);
Route::get('product/active-deal/{id}',[App\Http\Controllers\Admin\ProductController::class,'activedeal']);
Route::get('product/not-deal/{id}',[App\Http\Controllers\Admin\ProductController::class,'notdeal']);
Route::get('product/active-status/{id}',[App\Http\Controllers\Admin\ProductController::class,'activestatus']);
Route::get('product/not-status/{id}',[App\Http\Controllers\Admin\ProductController::class,'notstatus']);
Route::get('campaign/active-status/{id}',[App\Http\Controllers\Admin\CampaignController::class,'activestatus']);
Route::get('campaign/not-status/{id}',[App\Http\Controllers\Admin\CampaignController::class,'notstatus']);
Route::get('cat',[App\Http\Controllers\Admin\ProductController::class,'cat']);
