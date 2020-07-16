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
Route::get('user/{id}','Api\UsersController@show');
Route::put('user/{id}','Api\UsersController@update');
Route::post('login', 'Api\UsersController@login');
Route::post('register', 'Api\UsersController@register');
Route::get('logout', 'Api\UsersController@logout')->middleware('auth:api');
Route ::put('changepassword/{id}','Api\UsersController@changepassword');


