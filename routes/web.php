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
<<<<<<< HEAD


=======

/*Route::post('/login/custom', [
	'uses' => 'LoginController@login',
	'as' => 'login.custom'
]);
*/
>>>>>>> c701d1bbacda6c6342d47c47e704aad4f329ed8e
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
<<<<<<< HEAD
=======




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> c701d1bbacda6c6342d47c47e704aad4f329ed8e
