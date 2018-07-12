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

//Frontend Route
Route::get('/','frontend\HomeController@index')->name('frontend.home');

Route::get('/product','frontend\ProductController@index')->name('frontend.product');

Route::get('/product-single','frontend\ProductSingleController@index')->name('frontend.product-single');

Route::get('/new','frontend\NewController@index')->name('frontend.new');

Route::get('/new-single','frontend\NewSingleController@index')->name('frontend.new-single');

Route::get('/contact','frontend\ContactController@index')->name('frontend.contact');

Route::get('/cart','frontend\CartController@index')->name('frontend.cart');

Route::get('/checkout','frontend\CheckoutController@index')->name('frontend.checkout');


