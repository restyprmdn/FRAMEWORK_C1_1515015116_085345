<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;
use App\pengguna;


class mahasiswaController extends Controller
{
     public function awal()
{
      return view('mahasiswa.awal',['data'=>mahasiswa::all()]);
    }

    public function tambah()

   {
      return view('mahasiswa.tambah');
   }
   public function simpan(Requests $input)
   {
    $mahasiswa = new mahasiswa();
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    $informasi = $mahasiswa->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);

   }

   public function edit($id)
   {
    $mahasiswa = mahasiswa :: find($id);
    return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
   }

   public function lihat($id)
   {
    $mahasiswa = mahasiswa :: find($id);
    return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
   }

   public function update($id,Requests $input)
   {
    $mahasiswa = mahasiswa ::find($id);
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $informasi = $mahasiswa->save() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
   }

   public function hapus($id)
   {
    $mahasiswa = mahasiswa ::find($id);
    $informasi = $mahasiswa->delete() ? 'berhasil simpan data' : 'Gagal simpan data';
    return redirect('mahasiswa')->with(['informasi'=>$informasi]);
   }
}
