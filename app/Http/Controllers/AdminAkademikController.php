<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Mahasiswa;
use App\Dosen;
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
        $list_mahasiswa = Mahasiswa::all();
        return view('admin.input-mahasiswa', ["list_kelas" => $list_kelas, "list_mahasiswa" => $list_mahasiswa]);
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

    public function editMahasiswa($id){
        $list_kelas = Kelas::all();
        $mahasiswa =  Mahasiswa::find($id);
        return view('admin.edit-mahasiswa', ["mahasiswa" => $mahasiswa, "list_kelas" => $list_kelas]);
    }

    public function submitEditMahasiswa($id, Request $request){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->name = $request->input('nama');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->kelas_id =  $request->input('kelas');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->no_telp = $request->input('telp');
        $mahasiswa->username = $request->input('username');
        $mahasiswa->save();

        return redirect('admin/input-mahasiswa');
    }


    public function deleteMahasiswa($id){
        Mahasiswa::destroy($id);
        return redirect('admin/input-mahasiswa');
    }

    public function input_dosen(){
        $list_dosen = Dosen::all();
        return view('admin.input-dosen', ["list_dosen" => $list_dosen]);
    }

    public function postDosen(Request $request){
        $nama = $request->input('nama');
        $nip = $request->input('nip');
        $kode = $request->input('kode');
        $username = $request->input('username');
        $password = $request->input('password');

        $new_dosen = new Dosen();
        $new_dosen->nip = $nip;
        $new_dosen->name = $nama;
        $new_dosen->kode = $kode;
        $new_dosen->username = $username;
        $new_dosen->password = Hash::make($password);
        $new_dosen->save();

        return redirect('admin/input-dosen');
    }

    public function deleteDosen($id){
        Dosen::destroy($id);
        return redirect('admin/input-dosen');
    }

    public function editDosen($id){
        $dosen = Dosen::find($id);
        return view('admin.edit-dosen', ["dosen" => $dosen]);
    }

    public function submitEditDosen($id, Request $request){
        $dosen = Dosen::find($id);
        $dosen->name = $request->input('nama');
        $dosen->nip = $request->input('nip');
        $dosen->username = $request->input('username');
        $dosen->kode = $request->input('kode');
        $dosen->save();

        return redirect('admin/input-dosen');
    }

    public function profile(){
        $user = Auth::guard('admin_akademik')->user();
        return view('admin.profile', ["user" => $user]);
    }
}
