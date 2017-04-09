<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table ='matkul';//mendefinisikan suatu tabel bernama matkul
	protected $guarded=['id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update
	
	public function dosenmatkul()//suatu fungsi bernama dosenamtkul
	{
		return $this->hasMany(dosenmatkul::class,'matakuliah_id');//mengembalikan nilai return dengan mendefiniskan hasMany pada model dosenmatkul dengan foreign key matakuliah_id
	}

	public function listMatakuliahdanDosen(){
      $out =[];
      foreach ($this->all() as $matakuliah){
        $out[$matakuliah->id] = "{$matakuliah->title}";
      }
      return $out;
    }
}
