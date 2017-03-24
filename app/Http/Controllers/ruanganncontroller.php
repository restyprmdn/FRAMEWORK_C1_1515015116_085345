<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangann;

class ruanganncontroller extends Controller

{
    //
    public function awal()
    {
      
        return view('ruangann.awal', ['data'=>ruangann::all()]);
    }
    public function tambah()
    {
      
        return view('ruangann.tambah');
    }
    public function simpan(Request $input)
    {
        $ruangann = new ruangann;
        $ruangann->title = $input->title;
        $informasi = $ruangann->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangann')->with(['informasi'=>$informasi]);
    }
     public function edit($id)
    {
        $ruangann = ruangann::find($id);
        return view('ruangann.edit')->with(array('ruangann'=>$ruangann));
    }
    public function lihat($id)
    {
        $ruangann = ruangann::find($id);
        return view('ruangann.lihat')->with(array('ruangann'=>$ruangann));
    }
    public function update($id, Request $input)
    {
        $ruangann = ruangann::find($id);
        $ruangann->title = $input->title;
        $informasi = $ruangann->save()? 'berhasil update data' : 'gagal update data';
        return redirect('ruangann')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangann = ruangann::find($id);
        $informasi = $ruangann->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangann')->with(['informasi'=>$informasi]);
    }
}
