<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function home(){
        return view('dosen.dashboard');
    }

    public function input_presensi(){
        return view('dosen.input-presensi');
    }

    public function input_nilai(){
        return view('dosen.input-nilai');
    }

    public function jadwal(){
        return view('dosen.jadwal');
    }

    public function profile(){
        $user = Auth::guard('dosen')->user();
        return view('dosen.profile',  ['user' => $user]);
    }
}
