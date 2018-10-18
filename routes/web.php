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

Route::get('FetchAllGigs', 'GigsController@FetchAllGigs')->name('FetchAllGigs');

Route::get('FetchSingleGig/{id}', 'GigsController@FetchSingleGig');

Route::get('FetchTransactionCharges', 'PercentageChargeController@FetchTransactionCharges')->name('FetchTransactionCharges');

Route::get('FetchAllPeople', 'PersonController@FetchAllPeople')->name('FetchAllPeople');

Route::get('FetchSinglePerson/{id}', 'PersonController@FetchSinglePerson');

Route::get('FetchAllProfession', 'ProfessionController@FetchAllProfession')->name('FetchAllProfession');

Route::get('FetchSingleProfession/{id}', 'ProfessionController@FetchSingleProfession');

Auth::routes();


