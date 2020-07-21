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
Route::get ('comment','api\CommentsController@index');
Route::post ('comment','api\CommentsController@store');
Route::get ('comment/{id}','api\CommentsController@show');
Route::put('comment/{id}','api\CommentsController@update');
Route::delete ('comment/{id}','api\CommentsController@destroy');


