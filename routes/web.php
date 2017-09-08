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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','Admins\DashboardController@getIndex'); 



		/* base_system */
			//education
				Route::resource('primary','PrimaryController');
			//end education

			//subject
				Route::resource('secondary','SecondaryController');
			//end subject

		/* end base_system */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
