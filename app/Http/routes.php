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

Route::post('/user', 'PagesController@user');

Route::get('/user', 'PagesController@user');
Route::get('/adminJadwal', 'JadwalController@admin');
Route::get('/userJadwal', 'JadwalController@user');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('signup.index');
});

Route::get('/keuangan', function () {
    return view('admin.keuangan.keuangan');
});

Route::get('/signupuser', function () {
    return view('signup.indexuser');
});

Route::get('/signupadmin', function () {
    return view('signup.indexadmin');

});