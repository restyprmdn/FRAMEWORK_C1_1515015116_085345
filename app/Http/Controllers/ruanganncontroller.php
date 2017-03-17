<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangann;

class ruanganncontroller extends Controller
{
    public function awal(){
    	return "Hello dari RuanganController";
    }

    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$ruangann = new ruangann();	
    	$ruangann->title="Ruang 406";
    	$ruangann->save();
    	return "data dengan username {$ruangann->title} telah disimpan";
    }
}
