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

Route::get('/newsandevents', 'NewsAndEventsController@index');

Route::get('/company', function () {
    $params['activenavbar'] = 'company';
    return view('company', $params);
});

Route::get('/directory', function () {
    $params['activenavbar'] = 'directory';
    return view('directories', $params);
});


Route::post('/login/custom', [
	'uses' => 'LoginController@login',
	'as' => 'login.custom'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/login/custom', [
	'uses' => 'LoginController@login',
	'as' => 'login.custom'

]);

Route::group(['middleware' => 'auth'], function() {
	Route::get('/welcome', function() {
		return view('welcome');
	})->name('welcome');

	Route::get('/dashboard', function() {
		return view('dashboard');
	})->name('dashboard');
});


