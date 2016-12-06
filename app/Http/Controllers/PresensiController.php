<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    // Dosen Dashboard
    public function input_presensi(){
        $list_matkul = Auth::guard('dosen')->user()->mataKuliah;
        return view('dosen.presensi.input-presensi', [
            "list_matkul" => $list_matkul
        ]);
    }

    public function postSelectMatkulPresensi(Request $request){
        $id_matkul = $request->input('matkul_id');
        return redirect('dosen/input-presensi/' . $id_matkul);
    }

    public function inputPresensiMahasiswa($id_matkul){
        $list_mahasiswa = MataKuliah::find($id_matkul)->kelas->mahasiswa;
//        return response()->json($list_mahasiswa);

        return view('dosen.presensi.input-presensi-mahasiswa', [
            'list_mahasiswa' => $list_mahasiswa,
            'matakuliah_id' => $id_matkul
        ]);

    }
}
