<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'wargas';

    protected $fillable = [
        'nik','nama','telp','email','username','password','user_id','kota_id'
    ];

    public function Kota(){ 
        return $this->belongsTo('App\models\Kota'); 
    }
}
