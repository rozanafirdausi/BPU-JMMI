<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	return view('pages.welcome');
// });
Route::get('/', 'PagesController@homepage');

Route::post('/admin', 'PagesController@admin');
Route::get('/user', 'PagesController@user');


Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('signup.index');
});