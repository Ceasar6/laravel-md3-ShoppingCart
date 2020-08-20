<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('Shop')->group(function (){
    Route::get('/','ProductController@index')->name('shop.index');
    Route::get('add/{id}', 'CartController@add')->name('add');
    Route::get('delete/{id}', 'CartController@deleteItemCart')->name('delete');
});
