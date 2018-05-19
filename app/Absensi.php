<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $table = 'absensi';
    protected $primaryKey = 'id_absensi';
    protected $fillable = [
    	'id_admin_absensi',
    	'jumlah_warga',
    ];

    public function jadwal()
    {
        return $this->hasMany('App\JadwalAbsensi','id_absensi');
    }   
}
