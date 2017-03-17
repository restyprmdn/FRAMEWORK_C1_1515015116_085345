<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwalmatkul;

class jadwalmatkulcontroller extends Controller
{
    public function awal(){
    	return "Hello dari jadwalmatkulController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$jadwalmatkul = new jadwalmatkul();	
    	$jadwalmatkul->mahasiswa_id=1;
    	$jadwalmatkul->ruangan_id=1;
    	$jadwalmatkul->dosen_matakuliah_id=3;
    	$jadwalmatkul->save();
    	return "data dengan jadwal matakuliah dengan id mahasiswa {$jadwalmatkul->mahasiswa_id} telah disimpan";
    }
}
