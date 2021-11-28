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

Route::get('cat',[App\Http\Controllers\Admin\ProductController::class,'cat']);
