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
Route::post('data', 'PersonController@update')->name('data');

//GigsController...
Route::post('update', 'GigsController@update')->name('update');

//ProfessionController...
Route::post('info', 'ProfessionController@update')->name('info');

