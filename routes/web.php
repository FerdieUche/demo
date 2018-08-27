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
    return view('app');
});

//
//Route::get('/start_selling', function () {
//    return view('start_selling');
//});
//
//Route::get('/seller_onboarding', function () {
//    return view('seller_onboarding');
//});

//Route::post("store/file", "FilesController@store");


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

