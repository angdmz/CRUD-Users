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

Route::group(['namespace'=>"Api"], function () {
    Route::get('/users','UsersController@index');
    Route::post('/users','UsersController@store');
    Route::patch('/users','UsersController@update');
    Route::delete('/users','UsersController@delete');
});
