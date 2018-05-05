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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api/ilce-secim-kurullari/{city}/{county}/{office}', 'OfficeApiController@office')->name('officeDetail');
Route::get('api/ilce-secim-kurullari/{city}/{county}', 'OfficeApiController@county')->name('countyOffices');
Route::get('api/ilce-secim-kurullari/{city}', 'OfficeApiController@cityDetail')->name('cityOffices');
Route::get('api/ilce-secim-kurullari', 'OfficeApiController@main')->name('allOffices');
