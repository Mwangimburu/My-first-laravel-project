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
Route::post('/search','UserviewController@search');
Route::get('/','UserviewController@blog');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('/users/logout','Auth\LoginController@Userlogout');
Route::get('/landlords','LandlordsController@index')->name('landlords.home');
Route::get('/landlords/login','LandlordsLoginController@showloginform')->name('landlords.login');
Route::post('/landlords/login','LandlordsLoginController@login')->name('landlords.login.submit');
Route::get('/landlords/logout','LandlordsLoginController@logout');
Route::resource('rooms','RoomsController');
Route::resource('book','UserbookingController');
Route::get('/vacantrooms','UserviewController@blog');


