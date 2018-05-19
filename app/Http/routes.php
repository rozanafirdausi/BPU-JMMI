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
Route::post('/barang/{id_barang}', 'BarangController@destroy');
Route::get('/barang/{id_barang}', 'BarangController@edit');
Route::post('/barang/{id_barang}/update', 'BarangController@update');

Route::get('/desaBinaan', 'DesaBinaanController@index');
Route::post('/desaBinaan', 'DesaBinaanController@store');
Route::post('/desaBinaan/{id_desa_binaan}', 'DesaBinaanController@destroy');
Route::get('/desaBinaan/{id_desa_binaan}', 'DesaBinaanController@edit');
Route::post('/desaBinaan/{id_desa_binaan}/update', 'DesaBinaanController@update');

Route::get('/keuangan', 'KeuanganController@index');
// Route::get('/keuangan/create', 'KeuanganController@create');
Route::post('/keuangan', 'KeuanganController@store');
Route::post('/keuangan/{id}', 'KeuanganController@destroy');
Route::get('/keuangan/{id}', 'KeuanganController@edit');
Route::post('/keuangan/{id}/update', 'KeuanganController@update');

// Route::get('/keuangan', 'KeuanganController@index');
// Route::post('/keuangan', 'KeuanganController@store');
Route::get('/penjualan', 'PenjualanController@index');
Route::post('/penjualan', 'PenjualanController@store');

Route::get('/bantuan', 'BantuanController@index');
Route::post('/bantuan', 'BantuanController@store');
Route::post('/bantuan/{id_bantuan}/update', 'BantuanController@update');
Route::post('/bantuan/{id_bantuan}', 'BantuanController@destroy');

Route::post('/jadwal', 'JadwalController@store');
Route::post('/jadwal/{id_jadwal_mengajar}/update', 'JadwalController@update');
Route::post('jadwal/{id_jadwal_mengajar}', 'JadwalController@destroy');

Route::get('/about', function () {
    return view('about');
});

// Route::get('/login', function () {
//     return view('signup.index');
// });

Route::get('/logout',function(){
	return view('signup.indexadmin');
});


Route::get('/signupuser', function () {
    return view('signup.indexuser');
});

Route::get('/signupadmin', function () {
    return view('signup.indexadmin');
});
