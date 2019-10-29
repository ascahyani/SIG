<?php
use Illuminate\Support\Facades\Route;

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


Route::post('/coba_tanggal', 'SIGTBController@coba')->name('tanggal');

Route::get('/coba_kepadatan', 'BobotController@penduduk');
Route::get('/coba_indeks', 'BobotController@indeks_rtphbs');
Route::get('/coba_faskes', 'BobotController@jumlah_faskes');
Route::get('/coba_kasustb', 'BobotController@kasustb');
Route::get('/coba_kematian', 'BobotController@kematiancoba');
Route::get('/coba_costkasus', 'BobotController@cost_kasustb');
Route::post('/coba_matriks', 'BobotController@api')->name('hasil.matriks');
Route::get('/coba_saw', 'BobotController@matriks');

Route::get('/coba_hahaha', 'BobotController@bobot_indeks');

//Route::get('/cari/matriks', 'BobotController@cari_matriks')->name('cari.matriks');

Route::get('/riwayat', 'BobotController@matik');

Route::get('/pengobatan', 'BobotController@pengobatan');

Route::get('/api', 'BobotController@Api')->name('api');
Route::get('/poligon', 'BobotController@matriks')->name('poligon');
Route::get('/gpoligon', 'BobotController@matriks');
Route::get('/peta', 'BobotController@matriks')->name('peta');
Route::get('/json', 'BobotController@json')->name('json');

Route::get('/count_pasien', 'PasienController@data');

Route::get('/admin', 'SIGTBController@admin')->name('admin');
Route::get('/login', 'SIGTBController@login');


Route::get('/fas', 'SIGTBController@titik_faskes');
Route::get('/peta_faskes', 'SIGTBController@peta_faskes');
Route::post('/peta_faskes/cari', 'SIGTBController@titik_faskes');

Route::get('/peta_pasien', 'SIGTBController@peta_pasien');
Route::post('/peta_pasien/cari', 'SIGTBController@peta_pasienn');

Route::get('/peta_rawan', 'SIGTBController@peta_rawan');
Route::post('/peta_rawan/cari', 'BobotController@matriks');


Route::get('/gpoligon2', 'BobotController@matriks');


// route halaman pengunjung
Route::get('/peta_faskes_pengunjung', 'PengunjungController@peta_faskes_p');
Route::post('/peta_faskes_pengunjung/cari', 'PengunjungController@peta_faskes2_p');

Route::get('/peta_pasien_pengunjung', 'PengunjungController@peta_pasien_p');
Route::post('/peta_pasien_pengunjung/cari', 'PengunjungController@peta_pasienn_p');



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
Route::get('/riwayat_pasien/hapus/{id}', 'RiwayatpasienController@hapus');


Route::get('/data_kecamatan', 'KecamatanController@index');
Route::get('/data_kecamatan/tambah', 'KecamatanController@tambah');
Route::post('/data_kecamatan/store', 'KecamatanController@store');
Route::get('/data_kecamatan/edit/{id}', 'KecamatanController@edit');
Route::post('/data_kecamatan/update','KecamatanController@update');
Route::get('/data_kecamatan/hapus/{id}', 'KecamatanController@hapus');


Route::get('/data_kepadatan', 'KepadatanController@index');
Route::get('/data_kepadatan/tambah', 'KepadatanController@tambah');
Route::post('/data_kepadatan/store', 'KepadatanController@store');
Route::get('/data_kepadatan/edit/{id}', 'KepadatanController@edit');
Route::post('/data_kepadatan/update','KepadatanController@update');
Route::get('/data_kepadatan/hapus/{id}', 'KepadatanController@hapus');


Route::get('/data_jenistb', 'JenistbController@index')->name('data.jenis.tb');
Route::get('/data_jenistb/tambah', 'JenistbController@tambah');
Route::post('/data_jenistb/store', 'JenistbController@store')->name('tambah.jenis.tb');
Route::get('/data_jenistb/edit/{id}','JenistbController@edit');
Route::post('data_jenistb/update','JenistbController@update');
Route::get('/data_jenistb/hapus/{id}', 'JenistbController@hapus');


Route::get('/data_indeks_rtphbs', 'IndeksController@index');
Route::get('/data_indeks_rtphbs/tambah', 'IndeksController@tambah');
Route::post('/data_indeks_rtphbs/store', 'IndeksController@store');
Route::get('/data_indeks_rtphbs/edit/{id}', 'IndeksController@edit')->name('edit.rtphbs');
Route::post('/data_indeks_rtphbs/update','IndeksController@update');
Route::get('/data_indeks/hapus/{id}', 'IndeksController@hapus');

Route::get('/data_faskes', 'FaskesController@index');
Route::get('/data_faskes/tambah', 'FaskesController@tambah');
Route::post('/data_faskes/store', 'FaskesController@store');
Route::get('/data_faskes/edit/{id}', 'FaskesController@edit');
Route::post('/data_faskes/update','FaskesController@update');
Route::get('/data_faskes/hapus/{id}', 'FaskesController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
