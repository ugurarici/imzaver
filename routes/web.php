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
    return view('welcome');
});

Route::get('ilce-secim-kurullari', 'OfficeController@main')->name('allOffices');
Route::get('ilce-secim-kurullari/{city}', 'OfficeController@city')->name('cityOffices');
Route::get('ilce-secim-kurullari/{city}/{county}', 'OfficeController@county')->name('countyOffices');
Route::get('ilce-secim-kurullari/{city}/{county}/{office}', 'OfficeController@office')->name('officeDetail');
