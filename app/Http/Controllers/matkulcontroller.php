<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matkul;

class matkulcontroller extends Controller
{
    public function awal(){
    	return "Hello dari matkulController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$matkul = new matkul();	
    	$matkul->title="Sistem Manajemen Basis Data";
    	$matkul->keterangan="Wajib";
    	$matkul->save();
    	return "data dengan mata kuliah {$matkul->title} telah disimpan";
    }
}
