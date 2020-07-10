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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('slide', 'Api\SlideController@index');
Route::post('slide', 'Api\SlideController@store');
Route::put('slide/{id}', 'Api\SlideController@update');
Route::get('slide/{id}', 'Api\SlideController@show');
Route::delete('slide/{id}', 'Api\SlideController@destroy');



