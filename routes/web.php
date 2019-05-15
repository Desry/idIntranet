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

Route::get('/posts', 'PostsController@store')->name('uploadImage'); //route to upload an image to a post

Route::get('/directory', function () {
    $params['activenavbar'] = 'directory';
    return view('directories', $params);
});

/*Route::get('/directory', function() {
	return view('directories');
});
*/

//disable user registration
Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', function() {
		return view('home');
	})->name('home');
});


//restrict Admin pages to administrator
/*Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
	Route::match(['get', 'post'], '/events', 'HomeController@admin');
});*/


Route::get('/resources', 'FilesController@index')->middleware('auth');

Route::resource('/posts', 'PostsController')->middleware('auth');

Route::resource('/events', 'EventsController')->middleware('auth');
