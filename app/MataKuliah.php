<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MataKuliah extends Model
{
    //
    protected $table = "matakuliah";

    private $id;
    private $kode;
    private $nama_matkul;
    private $kode_dosen;

    public function matakuliah(){
        $nilai = new app\Nilai();
        $jadwal = new app\Jadwal();
    }

    public function setId($id){
    	$this->id = $id;
    }

    public function getId(){
    	return $this->$id;
    }

    public function setKode($kode){
    	$this->kode = $kode;
    }

    public function getKode(){
    	return $this->$kode;
    }

    public function setNamaMatkul($nama_matkul){
    	$this->nama_matkul = $nama_matkul;
    }

    public function getNamaMatkul(){
    	return $this->$nama_matkul;
    }

    public function setKodeDosen($kode_dosen){
    	$this->kode_dosen = $kode_dosen;
    }

    public function getKodeDosen(){
    	return $this->$kode_dosen;
    }

    public function addMatkul(Request $request){
    	$matkul = new app\MataKuliah();
        $matkul->setId($request->id);
        $matkul->setKode($request->kode);
        $matkul->setNamaMatkul($request->nama_matkul);
        $matkul->setKodeDosen($request->kode_dosen);
        $matkul->save();
    }

// *** Eloquent Relationship *** //
    public function dosen(){
        return $this->belongsToMany('app\Dosen');
    }

    public function presensi(){
        return $this->hasMany('app\Presensi');
    }

    public function nilai(){
        return $this->hasMany('app\Nilai');
    }

    public function jadwal(){
        return $this->hasMany('app\Jadwal');
    }
}
