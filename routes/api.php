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
Route::get('order','api\OrdersController@index');
Route::post('order','api\OrdersController@store');
Route::get('order/{id}','api\OrdersController@show');
Route::put('order/{id}','api\OrdersController@update');
Route::delete('order/{id}','api\OrdersController@destroy');