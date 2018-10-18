<?php

use Illuminate\Http\Request;
use App\category;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', 'HomeController@test')->name('test');

//AuthController.....
Route::post('register', 'AuthController@store')->name('register');
Route::post('signin', 'AuthController@checkAuth')->name('signin');

//PersonController...
Route::post('UpdatePerson', 'PersonController@UpdatePerson')->name('UpdatePerson');

//GigsController...
Route::post('UpdateSingleGig', 'GigsController@UpdateSingleGig')->name('UpdateSingleGig');

//ProfessionController...
Route::post('UpdateProfession', 'ProfessionController@UpdateProfession')->name('UpdateProfession');

