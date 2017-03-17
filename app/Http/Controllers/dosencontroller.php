<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosencontroller extends Controller
{
    public function awal(){
    	return "Hello dari dosenController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();	
    	$dosen->nama="Resty Primadana";
    	$dosen->nip="FKTI0001";
    	$dosen->alamat="Jalan Juanda 8 Gg Mangga 3";
        $dosen->pengguna_id=1;
    	$dosen->save();
    	return "data dengan username {$dosen->nama} telah disimpan";
    }
}
