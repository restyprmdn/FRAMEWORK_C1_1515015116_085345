<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
	protected $table ='pengguna';//mendefinisikan suatu tabel bernama pengguna
	protected $fillable = ['username','password'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function mahasiswa()//suatu fungsi bernama mahasiswa
    {
    	return $this->hasOne(mahasiswa::class,'pengguna_id');//mengembalikan nilai return dengan mendefiniskan hasOne pada model mahasiswa dengan foreign key pengguna_id, karena relasi antara pengguna dan mahasiswa adalah one to one yang artinya satu pengguna hanya dapat dimilki oleh satu mahasiswa 
    }

    public function dosen()//suatu fungsi bernama dosen
    {
    	return $this->hasOne(dosen::class,'pengguna_id');//mengembalikan nilai return dengan mendefiniskan hasOne pada model dosen dengan foreign key pengguna_id, karena relasi antara pengguna dan dosen adalah one to one yang artinya satu pengguna hanya dapat dimilki oleh satu dosen 
    }
}
