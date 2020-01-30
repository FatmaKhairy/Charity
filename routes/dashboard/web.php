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
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\DB;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
		 Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function (){
     Route::get('/','donationController@index')->name('donations');
     Route::resource('/donations','donationController');
     Route::resource('/users','UserController')->except('show');//كل المتطوعين

     Route::resource('/volunteer','volunteerController');//error

	   Route::get('/volunteerAddDon','volunteerController@tackDonation');//x.y error


		});//end dashboard routes

});




