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

Route::get('/', 'ProductController@index')->name('index');
Route::get('product/{slug}', 'ProductController@show')->name('product');

Route::resource('cart', 'CartController');
Route::delete('cart/empty', 'CartController@emptyCart')->name('cart.empty');