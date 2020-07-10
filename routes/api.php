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
Route::get('partner','Api\PartnerController@index');
Route::post ('partner','Api\PartnerController@store');
Route::get('partner/{id}','Api\PartnerController@show');
Route::put ('partner/{id}','Api\PartnerController@update');
Route::delete ('partner/{id}','Api\PartnerController@destroy');

