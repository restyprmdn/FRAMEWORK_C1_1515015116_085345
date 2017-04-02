<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangann extends Model
{
    protected $table ='ruangann';//mendefinisikan rsuatu tabel bernama ruangann
	protected $fillable = ['title'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function jadwalmatkul()//suatu fungsi bernama jadwalmatkul
	{
		return $this->hasMany(jadwalmatkul::class,'ruangan_id');//mengembalikan nilai return dengan mendefiniskan hasMany pada model jadwalmatkul dengan foreign key ruangan_id, karena relasi antara ruangan dan jadwalmatkul adalah one to many dimana satu ruangan dapat digunakan oleh bebrapa jadwal matakuliah dan satu jadwal matakuliah hanya bisa menggunakan satu ruangan
	}
}
