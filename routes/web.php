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

Route::get('/', 'HomeController@showWelcome');

Route::get('apie', 'AboutController@showIndex');

Route::get('kontaktai', 'ContactController@showIndex');

Route::get('aiksteles/{city_id?}', 'SearchController@getSearch');

Route::get('aikstele/{title}', 'CourtController@getCourt');

Route::middleware(['auth'])->group(function() {

    Route::resource('admin/aiksteles', 'AdminCourtsController');

    Route::resource('admin/miestai', 'AdminCitiesController');

    Route::resource('admin/aiksteliu_tipai', 'AdminTypesController');

});