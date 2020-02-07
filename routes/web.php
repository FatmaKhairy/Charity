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

Auth::routes(['register'=>false]);

Route::get('/dashboard/donations', function () {
				return  redirect()->route('dashboard.donations');//اللي بتظهر بعد مااعمل لوجن
});

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/','giverController@index');
	Route::get('/boxes','giverController@showBoxes');
  Route::post('/donation','giverController@donation');
	Route::get('/home', 'HomeController@index')->name('home');
});