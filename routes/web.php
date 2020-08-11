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

Route::get('/', "HomeController@index");
Route::get('/search-hotel', 'SearchController@hotel');
Route::get('/search-hotel-apartments', 'SearchController@hotelApartments');
Route::get('/hotel-room/{location}', 'SearchController@hotelRoom');
Route::get('/cPanel', 'SearchController@cpanel');
Route::get('/cpanel/cities', 'CpanelController@cities');
// Route::view('/cpanel/cities', 'cpanel/cities/index');
Route::view('/login', 'cpanel/login')->name('login');

Route::post('/login', "Auth\LoginController@login");

Route::get('/logout', "Auth\LoginController@logout");




Route::view('/cpanel/countries', 'cpanel/countries/index');
Route::view('/cpanel/streets', 'cpanel/streets/index');
Route::get('/cpanel/users', "Cpanel\UserController@index");

Route::get('/cpanel/user/{user}/location', "Cpanel\LocationController@show");
Route::get('/cpanel/location/{location}/edit', "Cpanel\LocationController@edit");
Route::put('/cpanel/location/{location}', "Cpanel\LocationController@update");

Route::delete('/location/delete/{location}', "LocationController@destroy");

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/location/index', 'LocationController@index');

    Route::get('/location/create', 'LocationController@create');

    Route::post('/location', 'LocationController@store');

    Route::get('/location/{location}/edit', 'LocationController@edit');

    route::put('/location/{location}','LocationController@update');

    Route::delete('/location/delete/{location}', "LocationController@destroy");

    Route::delete('/photo/delete/{photo}', "LocationController@destroyPhoto");



});