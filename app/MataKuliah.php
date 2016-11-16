<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    //
    protected $table = "matakuliah";

    private $id;
    private $kode;
    private $nama_matkul;
    private $kode_dosen;

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

    public function addMatkul(){
    	//
    }
}
