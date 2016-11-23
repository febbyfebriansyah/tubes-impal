<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminAkademikController extends Controller
{

    public function home(){
        return view('admin.dashboard');
    }

    
    public function input_mahasiswa(){
        return view('admin.input-mahasiswa');
    }

    public function profile(){
        $user = Auth::guard('admin_akademik')->user();
        return view('admin.profile', ["user" => $user]);
    }
}
