<?php

use Illuminate\Http\Request;

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


Route::post('register', 'AuthController@store')->name('register');
Route::post('signin', 'AuthController@checkAuth')->name('signin');
Route::get('Person/{id?}', 'PersonController@index')->name('Person/{id?}');
Route::post('person', 'PersonController@store')->name('person');
Route::post('data', 'PersonController@update')->name('data');
Route::delete('Person/{id?}', 'PersonController@destroy')->name('Person/{id?}');
Route::get('Profession/{id?}', 'ProfessionController@index')->name('index');
Route::post('profession', 'ProfessionController@store')->name('profession');
Route::post('info', 'ProfessionController@update')->name('info');
Route::delete('Profession/{id?}', 'ProfessionController@destroy')->name('destroy');
Route::post('upload', 'FilesController@update')->name('upload');

Route::get('/file/list', 'FilesController@listFiles');

Route::post("/delete/file");