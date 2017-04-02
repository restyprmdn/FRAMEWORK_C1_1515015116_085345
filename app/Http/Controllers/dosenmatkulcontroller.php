<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosenmatkul;

class dosenmatkulcontroller extends Controller
{
    // public function awal(){
    // 	return "Hello dari dosenmatkulController";
    // }

    // public function tambah(){
    // 	return $this->simpan();
    // }
    // public function simpan(){
    // 	$dosenmatkul = new dosenmatkul();	
    // 	$dosenmatkul->dosen_id=1;
    // 	$dosenmatkul->matakuliah_id=1;
    // 	$dosenmatkul->save();
    // 	return "data dengan username {$dosenmatkul->dosen_id} telah disimpan";
    // }
    public function awal()
    {
      
        return view('dosenmatkul.awal', ['data'=>dosenmatkul::all()]);
    }
    public function tambah()
    {
      
        return view('dosenmatkul.tambah');
    }
    public function simpan(Request $input)
    {
        $dosenmatkul = new dosenmatkul;
        $dosenmatkul->dosen_id = $input->dosen_id;
        $dosenmatkul->matakuliah_id = $input->matakuliah_id;
        $informasi = $dosenmatkul->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('dosenmatkul')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
        $dosenmatkul = dosenmatkul::find($id);
        return view('dosenmatkul.edit')->with(array('dosenmatkul'=>$dosenmatkul));
    }
    public function lihat($id)
    {
        $dosenmatkul = dosenmatkul::find($id);
        return view('dosenmatkul.lihat')->with(array('dosenmatkul'=>$dosenmatkul));
    }
    public function update($id, Request $input)
    {
        $dosenmatkul = dosenmatkul::find($id);
        $dosenmatkul->dosen_id = $input->dosen_id;
        $dosenmatkul->matakuliah_id = $input->matakuliah_id;
        $informasi = $dosenmatkul->save()? 'berhasil update data' : 'gagal update data';
        return redirect('dosenmatkul')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $dosenmatkul = dosenmatkul::find($id);
        $informasi = $dosenmatkul->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosenmatkul')->with(['informasi'=>$informasi]);
    }
}
