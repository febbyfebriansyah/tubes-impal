<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    protected $table = "nilai";

    private $id;
    private $nilai;
    private $idMhs;
    private $idMatkul;

    public function setId($id){
    	$this->id = $id;
    }

    public function getId(){
    	return $this->$id;
    }

    public function setNilai($nilai){
    	$this->nilai = $nilai;
    }

    public function getNilai(){
    	return $this->$nilai;
    }

    public function getIdMhs(){
    	//
    }

    public function getIdMatkul(){
    	//
    }

    public function addNilai(){
    	//
    }

    public function changeNilai(){
    	//
    }

    public function deleteNilai(){
    	//
    }
}
