<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //

    public function submitMatkul(Request $request){
        $mata_kuliah = $request->input('mata-kuliah');
        $kelas = $request->input('kelas');
        $dosen = $request->input('dosen');

        $obj_matkul = new MataKuliah();
        $obj_matkul->kelas;
        $obj_matkul->id_dosen = $dosen;
        $obj_matkul->save();

        return "Data Tersimpan";
    }
}
