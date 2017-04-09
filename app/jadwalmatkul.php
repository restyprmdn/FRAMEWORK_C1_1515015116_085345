<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalmatkul extends Model
{
    protected $table ='jadwalmatkul';//mendefinisikan nama tabel dari model dosenmatkul
	protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function mahasiswa()//suatu fungsi yang bernama mahasiswa
	{
		return $this->belongsTo(mahasiswa::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model mahasiswa
	}
	public function ruangann() //sautu fungsi yang bernama ruangann
	{
		return $this->belongsTo(ruangann::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model ruangann
	}
	public function dosenmatkul()//suatu fungsi yang bernama dosen matkul
	{
		return $this->belongsTo(dosenmatkul::class);//mengembalikan nilai return dengn menggunakan fungsi belongstomany karena sebelumnya telah kita definisikan fungsi has many pada model dosenmatkul
	}
}
