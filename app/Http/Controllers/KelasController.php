<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function submitKelas(Request $request) {
        $kelas = $request->input('kelas');
        $jurusan = $request->input('jurusan');
        $fakultas = $request->input('fakultas');
        
        $obj_kelas = new Kelas();
        $obj_kelas->kode = $kelas;
        $obj_kelas->jurusan = $jurusan;
        $obj_kelas->fakultas = $fakultas;
        $obj_kelas->save();

        return redirect('admin/input-kelas');
    }

    public function input_kelas(){
        $list_kelas = Kelas::all();
        return view('admin.input-kelas', ["list_kelas" => $list_kelas]);
    }

    //untuk di dashboard admin
    public function deleteKelas($id){
        Kelas::destroy($id);
        return redirect('admin/input-kelas');
    }
}
