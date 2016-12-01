<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function home(){
        return view('dosen.dashboard');
    }

    public function input_nilai(){
        $list_matkul = Auth::guard('dosen')->user()->mataKuliah;
//        return view('dosen.input-nilai');
        return response()->json($list_matkul);
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
