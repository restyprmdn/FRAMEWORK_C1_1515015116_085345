<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;
use App\pengguna;

class dosencontroller extends Controller
{
protected $guarded = ['id'];
    protected $informasi = 'Gagal Melakukan Aksi';
   public function awal()
    {
        $semuadosenmatakuliah = dosenmatkul::all();
        return view('dosenmatkul.awal',['semuadosenmatakuliah'=>dosenmatkul::all()]);
    }
    public function tambah()
    {
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatkul.tambah', compact('dosen','matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosenmatkul = new dosenmatkul($input->only('dosen_id','matakuliah_id'));
        if($dosenmatkul->save()) $this->informasi = 'Dosen Matakuliah Berhasil Disimpan';
        return redirect('dosenmatkul')->with(['informasi' => $this->informasi]);
    }
    
    public function edit($id)
    {

        $dosenmatkul = dosenmatkul::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatkul.edit', compact('dosen','matakuliah','dosenmatkul'));
    }
    public function lihat($id)
    {
        $dosenmatkul = dosenmatkul::find($id);
        return view('dosenmatkul.lihat')->with(array('dosenmatkul'=>$dosenmatkul));
    }
    public function update($id, Request $input)
    {
        $dosenmatkul = dosenmatkul::find($id);
        $dosenmatkul->fill($input->only('dosen_id','matakuliah_id'));

        if($dosenmatkul->save()) $this->informasi = "Dosen Matakuliah Berhasil Di Perbaharui";
        return redirect('dosenmatkul')->with(['informasi' =>$this->informasi]);

        // $dosenmatkul->nama = $input ;
        // $dosenmatkul->nip = $input;
        // $dosenmatkul->alamat = $input;
        // $dosenmatkul->pengguna_id = $input;  
        // $dosenmatkul = save() ? 'Berhasil Update data' : 'gagal Update data';
        // return redirect('dosenmatkul')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $dosenmatkul = dosenmatkul::find($id);
        $informasi = $dosenmatkul->delete()? 'Berhasil hapus data' : 'gagal hapus data';
        // if ($dosenlmatakuliah->delete()) $this->informasi = "Jadwal Dosen  Berhasil di Hapus";
        return redirect('dosenmatkul')->with(['informasi' =>$this->informasi]);


        // $informasi = $dosenmatkul->save()    ? 'Berhasil hapus data' : 'gagal hapus data';
        // return redirect('dosenmatkul')->with(['informasi'=>$informasi]);
    }
}