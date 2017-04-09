<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenmatkul extends Model 
{
    protected $table ='dosenmatkul';//mendefinisikan nama tabel dari model dosenmatkul
	protected $fillable=['dosen_id','matakuliah_id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function dosen()//suatu fungsi bernama dosen
	{
		return $this->belongsTo(dosen::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan dosen 
		//yang berelasi one to many
	}
	public function matkul()//suatu fungsi bernama matkul
	{
		return $this->belongsTo(matkul::class);//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan matkul 
		//yang berelasi one to many
	}
	public function jadwalmatkul()//satu fungsi bernama jadwalmatkul
	{
		return $this->hasMany(jadwalmatkul::class,'dosen_matakuliah_id');//mengembalikan nilai return yang menghubungkan model dosenmatkul dengan jadwalmatkul 
		//yang berelasi one to many
	}

	public function listDosenDanMatakuliah()
	{
		$out =[];
		foreach($this->all() as $dosenmatkul)
		{
			$out[$dosenmatkul->id]="{$dosenmatkul->dosen->nama} (matkul {$dosenmatkul->matkul->title})";
		}return $out;
	}
}

