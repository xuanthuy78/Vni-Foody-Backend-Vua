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
Route::get('products', 'Api\ProductController@index');
Route::post('products', 'Api\ProductController@store');
Route::get('products/{id}', 'Api\ProductController@show');
Route::put('products/{id}', 'Api\ProductController@update');
Route::delete('products/{id}', 'Api\ProductController@destroy');
// Route::apiResource('products','Api\ProductController');
Route::get('products/search/{name}', 'Api\ProductController@searchByName');
Route::get('products/search/category/{id}', 'Api\ProductController@searchByCategory');
Route::get('products/search/partner/{id}', 'Api\ProductController@searchByPartner');


// Route::get('image', 'Api\UploadController@index');
// Route::post('image', 'Api\UploadController@store');


