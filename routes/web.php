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


Route::get('/admin', 'SIGTBController@admin')->name('admin');

Route::get('/peta_faskes', 'SIGTBController@peta_faskes');
Route::get('/peta_pasien', 'SIGTBController@peta_pasien');



Route::get('/data_pasien_tb', 'PasienController@index');
Route::get('/data_pasien_tb/tambah', 'PasienController@tambah');
Route::post('/data_pasien_tb/store', 'PasienController@store');
Route::get('/data_pasien_tb/edit/{id}','PasienController@edit');
Route::post('/data_pasien_tb/update','PasienController@update');
Route::get('/data_pasien_tb/hapus/{id}','PasienController@hapus');


Route::get('/data_riwayat_pasien', 'RiwayatpasienController@index');
Route::get('/data_riwayat_pasien/tambah', 'RiwayatpasienController@tambah');
Route::post('/riwayat_pasien/store', 'RiwayatpasienController@store');
Route::get('/riwayat_pasien/edit/{id}','RiwayatpasienController@edit');
Route::post('/riwayat_pasien/update','RiwayatpasienController@update');





Route::get('/data_kecamatan', 'KecamatanController@index');
Route::get('/data_kecamatan/tambah', 'KecamatanController@tambah');
Route::post('/data_kecamatan/store', 'KecamatanController@store');
Route::get('/data_kecamatan/edit/{id}', 'KecamatanController@edit');
Route::post('/data_kecamatan/update','KecamatanController@update');
Route::get('/data_kecamatan/hapus/{id}', 'KecamatanController@hapus');


Route::get('/data_jenistb', 'JenistbController@index')->name('data.jenis.tb');
Route::get('/data_jenistb/tambah', 'JenistbController@tambah');
Route::post('/data_jenistb/store', 'JenistbController@store')->name('tambah.jenis.tb');
Route::get('/data_jenistb/edit/{id}','JenistbController@edit');
Route::post('data_jenistb/update','JenistbController@update');


Route::get('/data_indeks_rtphbs', 'IndeksController@index');
Route::get('/data_indeks_rtphbs/tambah', 'IndeksController@tambah');
Route::post('/data_indeks_rtphbs/store', 'IndeksController@store');
Route::get('/data_indeks_rtphbs/edit/{id}', 'IndeksController@edit')->name('edit.rtphbs');
Route::post('/data_indeks_rtphbs/update','IndeksController@update');

Route::get('/data_faskes', 'FaskesController@index');
Route::get('/data_faskes/tambah', 'FaskesController@tambah');
Route::post('/data_faskes/store', 'FaskesController@store');
Route::get('/data_faskes/edit/{id}', 'FaskesController@edit');
Route::post('/data_faskes/update','FaskesController@update');
