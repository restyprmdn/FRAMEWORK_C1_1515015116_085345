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

// Route::get('/',function() {
//     return view('Welcome');
// });

// Route::auth();

// Route::get('/home', 'HomeController@index');

// Route::resource('anggota','Anggotacontroller');
// Route::resource('anggota.hobi','Hobicontroller');
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

Route::get('ruangann','ruangannController@awal');
Route::get('ruangann/tambah','ruangannController@tambah');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matkul','matkulController@awal');
Route::get('matkul/tambah','matkulController@tambah');

Route::get('dosenmatkul','dosenmatkulController@awal');
Route::get('dosenmatkul/tambah','dosenmatkulController@tambah');

Route::get('jadwalmatkul','jadwalmatkulController@awal');
Route::get('jadwalmatkul/tambah','jadwalmatkulController@tambah');
