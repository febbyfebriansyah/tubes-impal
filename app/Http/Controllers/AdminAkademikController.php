<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminAkademikController extends Controller
{

    public function home(){
        return view('admin.dashboard');
    }

    
    public function input_mahasiswa(){
        $list_kelas = Kelas::all();
        return view('admin.input-mahasiswa', ["list_kelas" => $list_kelas]);
    }

    public function postMahasiswa(Request $request){
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        $kelas = $request->input('kelas');
        $alamat = $request->input('alamat');
        $no_telp = $request->input('telp');
        $username = $request->input('username');
        $password = $request->input('password');

        $new_mahasiswa = new Mahasiswa();
        $new_mahasiswa->nim = $nim;
        $new_mahasiswa->username = $username;
        $new_mahasiswa->password = Hash::make($password);
        $new_mahasiswa->name = $nama;
        $new_mahasiswa->kelas_id = $kelas;
        $new_mahasiswa->alamat  = $alamat;
        $new_mahasiswa->no_telp = $no_telp;
        $new_mahasiswa->save();

        return redirect('admin/input-mahasiswa');

    }

    public function profile(){
        $user = Auth::guard('admin_akademik')->user();
        return view('admin.profile', ["user" => $user]);
    }
}
