<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //
    protected $table = "presensi";

    private $id;
    private $idMhs;
    private $idMatkul;
    private $kehadiran;

    public function setId($id){
    	$this->id = $id;
    }

    public function getId(){
    	return $this->$id;
    }

    public function setKehadiran($kehadiran){
    	$this->kehadiran = $kehadiran;
    }

    public function getKehadiran(){
    	return $this->$kehadiran;
    }

    public function getIdMhs(){
    	//
    }

    public function getIdMatkul(){
    	//
    }

    public function addPresensi(){
        //
    }

    public function getPresensi(){
        //
    }

    public function changePresensi(){
        //
    }

    public function deletePresensi(){
        //
    }
}
