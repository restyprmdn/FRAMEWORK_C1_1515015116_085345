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

Route::get('/',function() {
    return view('Welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('anggota','Anggotacontroller');
Route::resource('anggota.hobi','Hobicontroller');

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('pengguna/resty',function()
{
	$pengguna = new App\Pengguna();	
    	$pengguna->username='RestyPrimadana';
    	$pengguna->password='RestyCantik';
    	$pengguna->save();
    	return "data dengan username {$pengguna->username} telah disimpan";
});

Route::get('ruangann','ruanganncontroller@awal');
Route::get('ruangann/tambah','ruanganncontroller@tambah');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matkul','matkulcontroller@awal');
Route::get('matkul/tambah','matkulcontroller@tambah');

Route::get('dosenmatkul','dosenmatkulcontroller@awal');
Route::get('dosenmatkul/tambah','dosenmatkulcontroller@tambah');

Route::get('jadwalmatkul','jadwalmatkulController@awal');
Route::get('jadwalmatkul/tambah','jadwalmatkulController@tambah');

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matkul/lihat/{matkul}','matkulcontroller@lihat');
Route::post('matkul/simpan','matakuliahController@simpan');
Route::get('matkul/edit/{matkul}','matkulcontroller@edit');
Route::post('matkul/edit/{matkul}','matkulcontroller@update');
Route::get('matkul/hapus/{matkul}','matkulcontroller@hapus');

Route::get('ruangann/lihat/{ruangann}','ruanganncontroller@lihat');
Route::post('ruangann/simpan','ruanganncontroller@simpan');
Route::get('ruangann/edit/{ruangann}','ruanganncontroller@edit');
Route::post('ruangann/edit/{ruangann}','ruanganncontroller@update');
Route::get('ruangann/hapus/{ruangann}','ruanganncontroller@hapus');

Route::get('dosenmatkul/lihat/{dosenmatkul}','dosenmatkulcontroller@lihat');
Route::post('dosenmatkul/simpan','dosenmatkulcontroller@simpan');
Route::get('dosenmatkul/edit/{dosenmatkul}','dosenmatkulcontroller@edit');
Route::post('dosenmatkul/edit/{dosenmatkul}','dosenmatkulcontroller@update');
Route::get('dosenmatkul/hapus/{dosenmatkul}','dosenmatkulcontroller@hapus');

Route::get('jadwalmatkul/lihat/{jadwalmatkul}','jadwalmatkulController@lihat');
Route::post('jadwalmatkul/simpan','jadwalmatkulController@simpan');
Route::get('jadwalmatkul/edit/{jadwalmatkul}','jadwalmatkulController@edit');
Route::post('jadwalmatkul/edit/{jadwalmatkul}','jadwalmatkulController@update');
Route::get('jadwalmatkul/hapus/{jadwalmatkul}','jadwalmatkulController@hapus');

Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

Route::get('dosen/lihat/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');
