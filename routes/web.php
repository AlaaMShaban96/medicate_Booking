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
Route::get('/cPanel', 'SearchController@cpanel');
Route::get('/cpanel/cities', 'CpanelController@cities');
// Route::view('/cpanel/cities', 'cpanel/cities/index');
Route::view('/loginn', 'cpanel/login');
Route::get('/login', "Auth\LoginController@login");

Route::get('/logout', "Auth\LoginController@logout");


Route::view('/cpanel/countries', 'cpanel/countries/index');
Route::view('/cpanel/streets', 'cpanel/streets/index');

Route::get('/user/create', 'LocationController@create');
Route::delete('/users/delete/{location}', "LocationController@destroy");
