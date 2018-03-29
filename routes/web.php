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

Route::get('/products','ProductsController@getProducts');
Route::post('/addProduct','ProductsController@addProduct');
Route::get('/viewProduct/{id}','ProductsController@viewProduct');
Route::delete('/deleteProduct/{id}','ProductsController@deleteProduct');