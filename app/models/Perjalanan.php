<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanans';

    protected $fillable = [
        'tanggal','jam','lokasi','suhu_tubuh','kota_id','user_id'
    ];


}
