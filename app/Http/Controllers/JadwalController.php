<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    public function input_jadwal(){
        $list_kelas = Kelas::all();
        return view('admin.input-jadwal',[
            "list_kelas" => $list_kelas
        ]);
    }


}
