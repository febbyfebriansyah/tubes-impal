<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminAkademik extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'admin_akademik';

    protected $fillable = [
        'name', 'username', 'password',
    ];

    private $id;
    private $kodeAdmin;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->$id;
    }

    public function setKodeAdmin($kodeAdmin){
        $this->kodeAdmin = $kodeAdmin;
    }

    public function getKodeAdmin(){
        return $this->$kodeAdmin;
    }

    public function manageMahasiswa(){
        //
    }

    public function manageDosen(){
        //
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
