<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    // Dosen Dashboard
    public function input_presensi(){
        return view('dosen.presensi.input-presensi');
    }



}
