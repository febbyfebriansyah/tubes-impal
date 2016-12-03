<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function home(){
        return view('dosen.dashboard');
    }

    public function input_nilai(){
        $list_matkul = Auth::guard('dosen')->user()->mataKuliah;
        return view('dosen.input-nilai', ['list_matkul' => $list_matkul]);
//        return response()->json($list_matkul);
    }

    public function postNilai(Request $request){

        $matakuliah_id = $request->input('matkul_id');
        $mahasiswa_id = $request->input('mahasiswa_id');


        $uts = $request->input('uts');
        $uas = $request->input('uas');
        $quiz = $request->input('quiz');
        $tugas = $request->input('tugas');

        $nilai = Nilai::where('matakuliah_id', $matakuliah_id)
            ->where('mahasiswa_id', $mahasiswa_id)
            ->first();

        if ($nilai != null){
            return response()->json($nilai);
        } else {
            $nilai = new Nilai();
            $nilai->mahasiswa_id = $mahasiswa_id;
            $nilai->matakuliah_id = $matakuliah_id;

            $nilai->uts = $uts;
            $nilai->uas = $uas;
            $nilai->quiz = $quiz;
            $nilai->tugas = $tugas;
            $nilai->save();

            return redirect('dosen/input-nilai');

        }


    }


    public function jadwal(){
        $list_matkul = Auth::guard('dosen')->user()->mataKuliah;
        return view('dosen.jadwal', ["list_matkul" => $list_matkul]);
    }

    public function profile(){
        $user = Auth::guard('dosen')->user();
        return view('dosen.profile',  ['user' => $user]);
    }
}
