<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosenmatkul;

class dosenmatkulcontroller extends Controller
{
    public function awal(){
    	return "Hello dari dosenmatkulController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosenmatkul = new dosenmatkul();	
    	$dosenmatkul->dosen_id=1;
    	$dosenmatkul->matakuliah_id=1;
    	$dosenmatkul->save();
    	return "data dengan username {$dosenmatkul->dosen_id} telah disimpan";
    }
}
