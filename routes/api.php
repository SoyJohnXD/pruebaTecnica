<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('categories','categoriesController@index');
Route::get('categories/{id}','categoriesController@show');
Route::post('categories','categoriesController@store');
Route::put('categories/{id}','categoriesController@update');
Route::delete('categories/{id}','categoriesController@delete');

Route::get('products','productsController@index');
Route::get('products/{id}','productsController@show');
Route::post('products','productsController@store');
Route::put('products/{id}','productsController@update');
Route::delete('products/{id}','productsController@delete');

