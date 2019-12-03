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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::bind('pregnancy', function($pregnancy){
	return App\Pregnancy::find($pregnancy);
});

Route::get('/', 'MainController@index')->name('home.index');
// Route::get('/store', 'PregnancyController@store')->name('store');
// Route::get('/store-create', 'PregnancyController@index')->name('store.index');

Route::group(['middleware' => 'auth'], function() {
	Route::resource('/pregnancy', 'PregnancyController');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
