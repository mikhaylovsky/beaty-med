<?php

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

Route::get('/test', function () {
    return response()->json(['test' => 'success'])->header('Access-Control-Allow-Origin', '*');
});

Route::middleware('auth:api')->group(function () {
    Route::get('dashboard', function () {
        return response()->json(['data' => 'Test Data']);
    });
});
