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
Route::resource("admin/product",'ProductController');
Route::resource("admin/protype",'ProtypeController');
Route::resource("admin/manufacture",'ManufactureController');

Route::post('/userlogin','WelcomeController@admin')->middleware('user');
Route::post('/userregister','WelcomeController@register');

Route::get('delete/{id}','WelcomeController@delete');

Route::get('/logout/out','WelcomeController@logout');
Route::get('cart/{id}','WelcomeController@addcart');
Route::post('/find','WelcomeController@find');
Route::post('/type/find','WelcomeController@find');
Route::post('/product/find','WelcomeController@find');
Route::get('/product/{id?}','WelcomeController@product');
Route::get('type/{id}','WelcomeController@type');
Route::get('/{id?}','WelcomeController@index');

