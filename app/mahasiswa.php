<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table ='mahasiswa';//mendefinisikan nama tabel dari model mahasiswa
	protected $guarded=['id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function pengguna()//suatu fungsi bernama pengguna
    {
    	return $this->belongsTo(pengguna::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan matkul 
        //yang berelasi one to one dimana satu mahasiswa hanya dapat memiliki satu id pengguna
    }

    public function jadwalmatkul()//suatu fungsi bernama jadwalmatkul
    {
    	return $this->hasMany(jadwalmatkul::class,'mahasiswa_id');//mengembalikan nilai return dengan mendefiniskan hasMany pada model dosenmatkul dengan foreign key matakuliah_id, karena relasi antara mahasiswa dan jadwalmatkul adalah one to many yang artinya satu mahasiswa dapat memiliki beberapa jadwal dan satu jadwal hanya dimiliki satu mahasiswa
    }
}
