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
Auth::routes();

Route::get('setTheme/{themeName}', function($themeName){
	Session::put('themeName', $themeName);
   	return Redirect::to('/');
});

Route::get('/', 'HomeController@index')->name('home');
