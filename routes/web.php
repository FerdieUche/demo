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

Route::get('Gigs', 'GigsController@index')->name('Gigs');

Route::get('Gig/{id}', 'GigsController@show');

Route::get('person', 'PersonController@index')->name('Person');

Route::get('person/{id}', 'PersonController@show');

Route::get('profession', 'ProfessionController@index')->name('Profession');

Route::get('profession/{id}', 'ProfessionController@show');

Auth::routes();


