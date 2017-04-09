<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table ='dosen';//mendefinisikan nama tabel dari model dosen
	protected $fillable =['nama','nip','alamat','pengguna_id'];//Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update

	public function pengguna()//mendefinisikan nama tabel dari model pengguna
	{
		return $this->belongsTo(pengguna::class);//mengembalikan nilai return yang menghubungkan model dosen dengan pengguna 
		//yang berelasi one to one
	}
	public function dosenmatkul()//mendefinisikan nama tabel dari model dosen
	{
		return $this->hasMany(dosenmatkul::class,'dosen_id');//mengembalikan nilai return dengn mendefinisikan hasMan yang menghubungkan model dosen dengan pengguna yang berelasi one to many dengan foreign key dosen_id yang ada di model dosenmatkul
		
	}
	public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    public function listDosenDanNip(){
      $out =[];
      foreach ($this->all() as $dosen){
        $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
      }
      return $out;
    }
}

//pada model ini dosen berelasi dengan pengguna
//dimana relasi yang terjadi adalah one to one
//artinya satu dosen hanya memiliki satu id pengguna
//dan satu id pengguna mewakili satu dosen

// selain berelasi dengan pengguna , juga memiliki relasi dengam dosen matkul
// pada dosen matkul terjadi relasi one to many dimana
// satu dosen dapat mengajar beberapa matakuliah 
// sedangkan satu matakuliah hanya dapat diajar oleh satu dosen
// sehingga pada function dosenmatkul ditambahkan has many karna yang bernilai n(banyak) adalah dosen
// dengan memanggil dosen_id yang merupakan foreign key pada dosen 