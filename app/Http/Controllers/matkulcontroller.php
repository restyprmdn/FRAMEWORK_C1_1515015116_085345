<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matkul;

class matkulcontroller extends Controller
{
    public function awal()
    {
        return view('matkul.awal',['data'=>matkul::all()]);
    }

    public function tambah()
    {
        return view('matkul.tambah');
    }
    
    public function simpan(Request $input)
    {
        $matkul = new matkul; 
        $matkul->title=$input->title;
        $matkul->keterangan=$input->keterangan;
        $informasi=$matkul->save()?'Berhasil simpan data' :'Gagal simpan data';
        return redirect ('matkul')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $matkul=matkul::find($id);
        return view ('matkul.edit')->with(array('matkul'=>$matkul));
    }
    public function lihat($id)
    {
        $matkul=matkul::find($id);
        return view('matkul.lihat')->with(array('matkul'=>$matkul));
    }
    public function update ($id,Request $input)
    {
        $matkul= matkul::find($id);
        $matkul->title=$input->title;
        $matkul->keteragan=$input->keterangan;
        $informasi=$matkul->save()?'Berhasil simpan data' :'Gagal update data';
        return redirect ('matkul')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $matkul = matkul::find($id);
        $informasi=$matkul->delete()? 'Berhasil hapus data':'Gagal hapus data';
        return redirect ('matkul')->with(['informasi'=>$informasi]);
    }
}
