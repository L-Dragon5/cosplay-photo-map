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

// App Controller
Route::get('/', 'Web\AppController@getApp');

// Location Controller
Route::get('/locations/', 'Web\LocationController@getAllLocations');
Route::get('/locations/{id}', 'Web\LocationController@getLocation');

// LocationsPhoto Controller
Route::get('/locations-photo/{id}/{photoshoot}', 'Web\LocationsPhotoController@getPhotosByLocation');



// Voyager Controller
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
