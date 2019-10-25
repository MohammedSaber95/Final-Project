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
Auth::routes();
Route::get('/','pagecontroller@index')->name('home');


Route::get('/cart','pagecontroller@cart')->name('cart');
Route::get('/checkout','pagecontroller@checkout')->name('checkout');
Route::get('/product/{id}','pagecontroller@product')->name('product');
Route::post('/product','pagecontroller@RateFun')->name('ratingproduct');

Route::get('/shop/{id}','pagecontroller@sort')->name('sortCategory');
Route::any('/search','pagecontroller@mysearch')->name('searchproduct');








