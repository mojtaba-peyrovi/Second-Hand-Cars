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

Route::get('/', function () {
    return view('front.layouts.master');
});
Route::resource('/cars','carsController');
Route::resource('/dealers','DealersController');

//search cars
Route::get('search', 'carsController@table')->name('search');
