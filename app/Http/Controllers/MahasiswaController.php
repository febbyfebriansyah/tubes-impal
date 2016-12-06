<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function home(){
        return view('mahasiswa.dashboard');
    }

    public function regist_bayar(){
        return view('mahasiswa.regist-bayar');
    }

    public function regist_matkul(){
        return view('mahasiswa.regist-matkul');
    }

    public function jadwal(){
        return view('mahasiswa.jadwal');
    }

    public function nilai(){
        $listnilai = Auth::guard('mahasiswa')->user()->nilai;
        return view('mahasiswa.nilai', ['list_nilai' => $listnilai]);
//////        return response()->json($mhs->nilai);
//        return view('mahasiswa.nilai');
    }

    public function presensi(){
        return view('mahasiswa.presensi');
    }

    public function profile(){
        $mhs = Auth::guard('mahasiswa')->user();
        return view('mahasiswa.profile', ['mhs' => $mhs]);
    }

    public function postProfile(Request $request){
        $mhs = Mahasiswa::find(intval($request['id']));
        $mhs->nim = $request['nim'];
        $mhs->email = $request['email'];
        $mhs->name = $request['name'];
        $mhs->alamat = $request['alamat'];
        $mhs->no_telp = $request['no_telp'];
        $mhs->password = Hash::make($request['password']);
        $mhs->save();

        return redirect('/mahasiswa/profile');
    }
}
