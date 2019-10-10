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
Route::get('/shop','pagecontroller@shop')->name('shop');
Route::get('/cart','pagecontroller@cart')->name('cart');
Route::get('/checkout','pagecontroller@checkout')->name('checkout');
Route::get('/product','pagecontroller@product')->name('product');






