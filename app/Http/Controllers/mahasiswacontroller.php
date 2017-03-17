<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
    	return "Hello dari mahasiswaController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new mahasiswa();	
    	$mahasiswa->nama="Resty Primadana";
    	$mahasiswa->nim="1515015116";
    	$mahasiswa->alamat="Jalan Juanda 8 Gg Mangga 3";
        $mahasiswa->pengguna_id=1;
    	$mahasiswa->save();
    	return "data dengan username mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}
