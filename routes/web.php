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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('settings')->middleware(['auth'])->group(function () {
    Route::post('/', 'SettingController@update');
});

Route::prefix('carburants')->group(function () { });

Route::prefix('users')->group(function () { });

Route::prefix('carburants')->group(function () { });

Route::prefix('voitures')->group(function () {
    Route::get('/', 'VoitureController@create')->name('addCar');
    Route::post('/', 'VoitureController@store')->name('saveCar');
});

Route::prefix('constructeurs')->group(function () {
    Route::post('/', 'ContructeurController@store')->name('addMarque');
});

Route::prefix('marques')->group(function () {
    Route::get('/', 'MarqueController@index')->name('listMarques');
    Route::post('/', 'MarqueController@store')->name('addMarque');
});

Route::prefix('modeles')->group(function () {
    Route::get('/', 'ModeleController@index')->name('listModele');
    Route::post('/', 'ModeleController@store')->name('addModele');
});

Route::prefix('transmissions')->group(function () {
    Route::post('/', 'TransmissionController@store')->name('addTransmission');
});

Route::prefix('carosseries')->group(function () {
    Route::post('/', 'CarosserieController@store')->name('addCarosserie');
});
