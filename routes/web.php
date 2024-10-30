<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('layouts');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {

    Route::get('/', 'HomePageController@index')->name('homePage');
    Route::get('/brand-Product/{id}', 'HomePageController@brand_Product')->name('brand_Product');
    Route::get('/category-Product/{id}', 'HomePageController@category_Product')->name('category_Product');


    Route::get('/search', 'HomePageController@search')->name('search');
    Route::post('/search-result', 'HomePageController@searchResult')->name('search.result');
    Route::get('/product-show/{id}', 'HomePageController@show')->name('product.show');

    Route::get('/details/{id}', 'HomePageController@details')->name('details');
    Route::get('/contact', 'HomePageController@contact')->name('contact');


    // cart

    Route::post('/addtocart/{id}', 'CartController@addtocart')->name('addtocart');
    Route::get('/cart', 'CartController@cartpage')->name('cart');
    Route::get('/cart-destroy/{id}', 'CartController@cartDestroy')->name('cartDestroy');

    Route::post('/cart-update/{id}', 'CartController@cartUpdate')->name('cartUpdate');





});


Route::group(['prefix' => 'coupon', 'namespace' => 'App\Http\Controllers\Frontend'], function () {

    // coupon apply
    Route::post('couponApply', 'CouponController@couponApply')->name('couponApply');

    Route::get('coupon_remove', 'CouponController@coupon_remove')->name('coupon_remove');
});



Route::group(['prefix' => 'order', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::post('store', 'OrderController@order_store')->name('order.store');
});


Route::group(['prefix' => 'prescriptions', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::post('prescriptions-upload', 'PrescriptionController@prescriptions_upload')->name('prescriptions.upload');
});
Route::group(['prefix' => 'prescriptions', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::post('upload', 'PrescriptionController@prescriptions_upload')->name('prescriptions.upload');
});

Route::group(['prefix' => 'doctor', 'namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('list', 'DoctorController@doctor_list')->name('doctor.list');
    Route::get('appointment', 'DoctorController@appointment')->name('doctor.appointment');
    Route::get('blood', 'DoctorController@blood')->name('doctor.blood');
    Route::get('ambulance', 'DoctorController@ambulance')->name('doctor.ambulance');
});
