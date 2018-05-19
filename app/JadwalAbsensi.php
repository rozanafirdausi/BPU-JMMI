<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalAbsensi extends Model
{
    //
    protected $table = 'jadwal_absensi';
    protected $primaryKey = 'id_jadwal_absensi';
    protected $fillable = [
    	'id_jadwal_mengajar',
        'id_absensi',
        'jumlah_warga',
    ];

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal','id_jadwal_mengajar');
    }

}
