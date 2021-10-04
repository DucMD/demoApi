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

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::apiResource('product', 'productCntroller');
*/

// Route::apiResource('demo', 'demo_api');
Route::group(['prefix' => 'demo'],function () {
    Route::get('/','demo_api@index');
    Route::get('show/{id}','demo_api@show');
    Route::post('create','demo_api@store');
    Route::put('update/{id}','demo_api@update');
    Route::get('delete/{id}','demo_api@destroy');
});

