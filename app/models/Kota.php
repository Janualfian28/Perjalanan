<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'Kotas';

    protected $fillable = [
        'nama_kota'
    ];


    public function Warga(){ 
        return $this->hasMany('App\models\Warga'); 
    }
}
