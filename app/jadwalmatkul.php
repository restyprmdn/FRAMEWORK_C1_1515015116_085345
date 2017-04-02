<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalmatkul extends Model
{
    protected $table ='jadwalmatkul';//mendefinisikan nama tabel dari model dosenmatkul
	protected $guarded=['id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function mahasiswa()//suatu fungsi yang bernama mahasiswa
	{
		return $this->belongsToMany(mahasiswa::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model mahasiswa
	}
	public function ruangann() //sautu fungsi yang bernama ruangann
	{
		return $this->belongsToMany(ruangann::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model ruangann
	}
	public function dosenmatkul()//suatu fungsi yang bernama dosen matkul
	{
		return $this->belongsToMany(dosenmatkul::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model dosenmatkul
	}
}
