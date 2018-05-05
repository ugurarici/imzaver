<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('api/ilce-secim-kurullari/{cityId}/{countyId}/{officeId}', 'OfficeApiController@office');
Route::get('api/ilce-secim-kurullari/{cityId}/{countyId}', 'OfficeApiController@county');
Route::get('api/ilce-secim-kurullari/{cityId}', 'OfficeApiController@cityDetail');
Route::get('api/ilce-secim-kurullari', 'OfficeApiController@main');


Route::get('ilce-secim-kurullari/{city}/{county}/{office}', 'OfficeController@office')->name('officeDetail');
Route::get('ilce-secim-kurullari/{city}/{county}', 'OfficeController@county')->name('countyOffices');
Route::get('ilce-secim-kurullari/{city}', 'OfficeController@cityDetail')->name('cityOffices');
Route::get('ilce-secim-kurullari', 'OfficeController@main')->name('allOffices');



