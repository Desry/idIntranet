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

Route::get('/announcements', 'AnnouncementsController@index');


Route::get('/directory', function () {
    $params['activenavbar'] = 'directory';
    return view('directories', $params);
});


//disable user registration
Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', function() {
		return view('home');
	})->name('home');

	Route::get('/dashboard', function() {
		return view('admin-dashboard');
	})->name('dashboard');
});


Route::get('/resources', 'FilesController@index');


Route::resource('/events', 'EventsController');
