<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    //
    protected $table = "registrasi";

    private $id;
    private $status;
    private $semester;
    private $idMhs;

    public function setId($id){
    	$this->id = $id;
    }

    public function getId(){
    	return $this->$id;
    }

    public function setStatus($status){
    	$this->status = $status;
    }

    public function getStatus(){
    	return $this->$status;
    }

    public function setSemester($semester){
    	$this->semester = $semester;
    }

    public function getSemester(){
    	return $this->$semester;
    }

    public function getIdMhs(){
    	//
    }
}
