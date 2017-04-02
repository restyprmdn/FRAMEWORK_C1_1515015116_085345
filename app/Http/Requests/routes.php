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

Route::get('dosenmatkul','dosenmatkulController@awal');
Route::get('dosenmatkul/tambah','dosenmatkulController@tambah');

Route::get('jadwalmatkul','jadwalmatkulcontroller@awal');
Route::get('jadwalmatkul/tambah','jadwalmatkulcontroller@tambah');

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matkul/lihat/{matkul}','matkulcontroller@lihat');
Route::post('matkul/simpan','matkulcontroller@simpan');
Route::get('matkul/edit/{matkul}','matkulcontroller@edit');
Route::post('matkul/edit/{matkul}','matkulcontroller@update');
Route::get('matkul/hapus/{matkul}','matkulcontroller@hapus');

Route::get('ruangann/lihat/{ruangann}','ruanganncontroller@lihat');
Route::post('ruangann/simpan','ruanganncontroller@simpan');
Route::get('ruangann/edit/{ruangann}','ruanganncontroller@edit');
Route::post('ruangann/edit/{ruangann}','ruanganncontroller@update');
Route::get('ruangann/hapus/{ruangann}','ruanganncontroller@hapus');

Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

Route::get('jadwalmatkul/lihat/{jadwalmatkul}','jadwalmatkulcontroller@lihat');
Route::post('jadwalmatkul/simpan','jadwalmatkulcontroller@simpan');
Route::get('jadwalmatkul/edit/{jadwalmatkul}','jadwalmatkulcontroller@edit');
Route::post('jadwalmatkul/edit/{jadwalmatkul}','jadwalmatkulcontroller@update');
Route::get('jadwalmatkul/hapus/{jadwalmatkul}','jadwalmatkulcontroller@hapus');

Route::get('dosenmatkul/lihat/{dosenmatkul}','dosenmatkulController@lihat');
Route::post('dosenmatkul/simpan','dosenmatkulController@simpan');
Route::get('dosenmatkul/edit/{dosenmatkul}','dosenmatkulController@edit');
Route::post('dosenmatkul/edit/{dosenmatkul}','dosenmatkulController@update');
Route::get('dosenmatkul/hapus/{dosenmatkul}','dosenmatkulController@hapus');

Route::get('dosen/lihat/{dosen}','dosencontroller@lihat');
Route::post('dosen/simpan','dosencontroller@simpan');
Route::get('dosen/edit/{dosen}','dosencontroller@edit');
Route::post('dosen/edit/{dosen}','dosencontroller@update');
Route::get('dosen/hapus/{dosen}','dosencontroller@hapus');
