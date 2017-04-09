<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\jadwalmatkul;
use App\mahasiswa;
use App\dosenmatkul;
use App\ruangann;

class jadwalmatkulController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi='gagal melakukan aksi';
    public function awal()
      { 
        // $semuajadwalmatkul=jadwalmatkul::all();
        // return view('jadwalmatkul.awal',compact('semuajadwalmatkul'));
        return view('jadwalmatkul.awal',['semuajadwalmatkul'=>jadwalmatkul::all()]);
      }

    public function tambah()
      {
        $mahasiswa = new mahasiswa;
        $ruangann = new ruangann;
        $dosenmatkul = new dosenmatkul;
        return view('jadwalmatkul.tambah',compact('mahasiswa','ruangann','dosenmatkul'));
      }

    public function simpan (Request $input)
      {
        $jadwalmatkul = new jadwalmatkul($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if(jadwalmatkul()->save()) $this->informasi= 'Jadwal Mahasiswa berhasil disimpan' ;
        return redirect('jadwalmatkul')->with(['informasi'=>$this->informasi]);
        }
        

   public function edit($id)
   {
    $jadwalmatkul = jadwalmatkul:: find($id);
    $mahasiswa = new mahasiswa;
    $ruangann = new ruangann;
    $dosenmatkul = new dosenmatkul; 
    return view('jadwalmatkul.edit',compact('mahasiswa','ruangann','dosenmatkul','jadwalmatkul'));
   }

   public function lihat ($id)
   {
    $jadwalmatkul = jadwalmatkul:: find($id);
    return view('jadwalmatkul.lihat')->with(array('jadwalmatkul'=>$jadwalmatkul));
   }

   public function update($id, Request $input)
    {
        $jadwalmatkul = jadwalmatkul::find($id);
        $jadwalmatkul->fill($input->only('ruangan_id', 'dosen_matakuliah_id','mahasiswa_id'));       
        if ($jadwalmatkul->save()) $this->informasi = "Jadwal Mahasiswa Berhasil di perbaharui";
        return redirect('jadwalmatkul')->with(['informasi' =>$this->informasi]);
    }

   public function hapus($id)
    {
        $jadwalmatkul = jadwalmatkul::find($id);    
        if ($jadwalmatkul->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil di Hapus";
        return redirect('jadwalmatkul')->with(['informasi' =>$this->informasi]);
   }
}
