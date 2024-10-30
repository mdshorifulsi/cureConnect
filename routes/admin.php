<?php

use Illuminate\Support\Facades\Route;

// category Routes

Route::group(['prefix' => 'category', 'as' => 'category.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'CategoryController@index')->name('index');
    Route::post('/store', 'CategoryController@store')->name('store');
    Route::post('/update/{id}', 'CategoryController@update')->name('update');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
    Route::get('/delete{id}', 'CategoryController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'CategoryController@inactive')->name('inactive');
    Route::get('/active/{id}', 'CategoryController@active')->name('active');

});


// brand Routes
Route::group(['prefix' => 'brand', 'as' => 'brand.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'BrandController@index')->name('index');
    Route::post('/store', 'BrandController@store')->name('store');
    Route::post('/update/{id}', 'BrandController@update')->name('update');
    Route::get('/edit/{id}', 'BrandController@edit')->name('edit');
    Route::get('/delete{id}', 'BrandController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'BrandController@inactive')->name('inactive');
    Route::get('/active/{id}', 'BrandController@active')->name('active');

});

Route::group(['prefix' => 'product', 'as' => 'product.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/create', 'ProductController@create')->name('create');
    Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
    Route::post('/store', 'ProductController@store')->name('store');
    Route::post('/update/{id}', 'ProductController@update')->name('update');
    Route::get('/delete{id}', 'ProductController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'ProductController@inactive')->name('inactive');
    Route::get('/active/{id}', 'ProductController@active')->name('active');


});


// slider Routes

Route::group(['prefix' => 'slider', 'as' => 'slider.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'SliderController@index')->name('index');
    Route::post('/store', 'SliderController@store')->name('store');
    Route::get('/edit/{id}', 'SliderController@edit')->name('edit');
    Route::post('/update/{id}', 'SliderController@update')->name('update');
    Route::get('/delete{id}', 'SliderController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'SliderController@inactive')->name('inactive');
    Route::get('/active/{id}', 'SliderController@active')->name('active');

});

// bestOffer
Route::group(['prefix' => 'bestOffer', 'as' => 'bestOffer.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'BestOfferController@index')->name('index');
    Route::post('/store', 'BestOfferController@store')->name('store');
    Route::post('/update/{id}', 'BestOfferController@update')->name('update');
    Route::get('/edit/{id}', 'BestOfferController@edit')->name('edit');
    Route::get('/delete{id}', 'BestOfferController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'BestOfferController@inactive')->name('inactive');
    Route::get('/active/{id}', 'BestOfferController@active')->name('active');

});


//coupon route...
Route::group(['as' => 'coupon.', 'prefix' => 'coupon', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {


    Route::get('/', 'CouponController@index')->name('index');
    Route::post('/store', 'CouponController@store')->name('store');
    Route::get('/edit/{id}', 'CouponController@edit')->name('edit');
    Route::post('/update/{id}', 'CouponController@update')->name('update');
    Route::get('/delete{id}', 'CouponController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'CouponController@inactive')->name('inactive');
    Route::get('/active/{id}', 'CouponController@active')->name('active');


});
Route::group(['as' => 'order.', 'prefix' => 'order', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {


    Route::get('/', 'OrderController@index')->name('index');

    Route::get('/pending/{id}', 'OrderController@pending')->name('pending');
    Route::get('/done/{id}', 'OrderController@done')->name('done');
    Route::get('/view/{id}', 'OrderController@view')->name('view');



});
Route::group(['as' => 'prescription.', 'prefix' => 'prescription', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {


    Route::get('/', 'PrescriptionController@index')->name('index');
    Route::get('/inactive/{id}', 'PrescriptionController@inactive')->name('inactive');
    Route::get('/active/{id}', 'PrescriptionController@active')->name('active');


});



Route::group(['prefix' => 'setting', 'as' => 'setting.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::get('/', 'SettingController@index')->name('index');
    Route::post('/update/{id}', 'SettingController@update')->name('update');

});

// doctor

Route::group(['prefix' => 'doctor', 'as' => 'doctor.', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::get('/', 'DoctorController@index')->name('index');
    Route::get('/create', 'DoctorController@create')->name('create');
    Route::post('/store', 'DoctorController@store')->name('store');
    Route::get('/edit/{id}', 'DoctorController@edit')->name('edit');
    Route::post('/update/{id}', 'DoctorController@update')->name('update');
    Route::get('/delete{id}', 'DoctorController@destroy')->name('delete');
    Route::get('/inactive/{id}', 'DoctorController@inactive')->name('inactive');
    Route::get('/active/{id}', 'DoctorController@active')->name('active');

});
