<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwalmatkul;

class jadwalmatkulController extends Controller
{
    public function awal()
{
      return view('jadwalmatkul.awal',['data'=>jadwalmatkul::all()]);
    }

    public function tambah()

   {
      return view('jadwalmatkul.tambah');
   }
   public function simpan(Requests $input)
   {
    $jadwalmatkul = new jadwalmatkul();
    $jadwalmatkul->nama = $input->nama;
    $jadwalmatkul->ruangan = $input->ruangan;
    $jadwalmatkul->dosen = $input->dosen;
    $informasi = $jadwalmatkul->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('jadwalmatkul')->with(['informasi'=>$informasi]);

   }

   public function edit($id)
   {
    $jadwalmatkul = jadwalmatkul :: find($id);
    return view('jadwalmatkul.edit')->with(array('jadwalmatkul'=>$jadwalmatkul));
   }

   public function lihat($id)
   {
    $jadwalmatkul = jadwalmatkul :: find($id);
    return view('jadwalmatkul.lihat')->with(array('jadwalmatkul'=>$jadwalmatkul));
   }

   public function update($id,Requests $input)
   {
    $jadwalmatkul = jadwalmatkul ::find($id);
    $jadwalmatkul->nama = $input->nama;
    $jadwalmatkul->ruangan = $input->ruangan;
    $jadwalmatkul->dosen = $input->dosen;
    $informasi = $jadwalmatkul->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('jadwalmatkul')->with(['informasi'=>$informasi]);
   }

   public function hapus($id)
   {
    $jadwalmatkul = jadwalmatkul ::find($id);
    $informasi = $jadwalmatkul->delete() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('jadwalmatkul')->with(['informasi'=>$informasi]);
   }
}
