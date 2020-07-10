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
Route:: get('new_categories','Api\New_categoriesController@index');
Route:: post('new_categories','Api\New_categoriesController@store');
Route:: get('new_categories/{id}','Api\New_categoriesController@show');
Route:: put('new_categories/{id}','Api\New_categoriesController@update');
Route:: delete('new_categories/{id}','Api\New_categoriesController@destroy');