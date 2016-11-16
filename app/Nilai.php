<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
    	return $this->$idMhs;
    }

    public function getIdMatkul(){
    	return $this->idMatkul;
    }

    public function addNilai(Request $request){
    	$nilai = new app\Nilai();
        $nilai->setId($request->id);
        $nilai->setNilai($request->nilai);
        $nilai->save();
    }

    public function changeNilai($nilai){
    	$this->nilai = $nilai;
    }

    public function deleteNilai(app\Nilai $nilai){
    	$nilai->delete();
    }
// *** Eloquent Relationship *** //
    public function mataKuliah(){
        return $this->belongsTo('app\MataKuliah');
    }

    public function mahasiswa(){
        return $this->belongsTo('app\Mahasiswa');
    }

}
