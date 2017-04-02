<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatkul extends Model 
{
    protected $table ='dosenmatkul';//mendefinisikan nama tabel dari model dosenmatkul
	protected $guarded=['id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function dosen()//suatu fungsi bernama dosen
	{
		return $this->belongsToMany(dosen::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan dosen 
		//yang berelasi one to many
	}
	public function matkul()//suatu fungsi bernama matkul
	{
		return $this->belongsToMany(matkul::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan matkul 
		//yang berelasi one to many
	}
	public function jadwalmatkul()//satu fungsi bernama jadwalmatkul
	{
		return $this->hasMany(jadwalmatkul::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan jadwalmatkul 
		//yang berelasi one to many
	}
}

