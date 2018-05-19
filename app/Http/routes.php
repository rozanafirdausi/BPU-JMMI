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
Route::get('/admin', 'PagesController@admin');
Route::post('/user', 'PagesController@user');
Route::get('/user', 'PagesController@user');

Route::get('/adminJadwal', 'JadwalController@admin');
Route::get('/userJadwal', 'JadwalController@user');
Route::get('/absensi', 'AbsensiController@index');
Route::post('/absensi', 'AbsensiController@store');
Route::get('/barang', 'BarangController@index');
Route::post('/barang', 'BarangController@store');
Route::get('/barang/{id}', 'BarangController@edit');
Route::post('/barang/delete/{id}', 'BarangController@destroy');
Route::post('/barang/{id}', 'BarangController@update');
Route::get('/desaBinaan', 'DesaBinaanController@index');
Route::get('desaBinaan/create', 'DesaBinaanController@create');
Route::post('/desaBinaan', 'DesaBinaanController@store');
Route::post('/desaBinaan/{id_desa_binaan}', 'DesaBinaanController@destroy');
Route::get('/desaBinaan/{id_desa_binaan}/edit', 'DesaBinaanController@edit');
Route::post('/desaBinaan/{id_desa_binaan}', 'DesaBinaanController@update');
Route::get('/keuangan', 'KeuanganController@index');
Route::post('/keuangan', 'KeuanganController@store');
Route::get('/penjualan', 'PenjualanController@index');
Route::post('/penjualan', 'PenjualanController@store');
Route::get('/bantuan', 'BantuanController@index');
Route::post('/bantuan', 'BantuanController@store');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('signup.index');
});


Route::get('/signupuser', function () {
    return view('signup.indexuser');
});

Route::get('/signupadmin', function () {
    return view('signup.indexadmin');
});
