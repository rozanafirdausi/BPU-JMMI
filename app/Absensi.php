<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $table = 'absensi';
    
    protected $fillable = [
    	'id_admin_absensi',
    	'jumlah_warga'
    ];
}
