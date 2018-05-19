<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table = 'jadwal_mengajar';
    protected $primaryKey = 'id_jadwal_mengajar';
    protected $fillable = [
    	'id_admin_jadwal',
    	'id_desa_binaan_jadwal',
    	'tanggal',
    	'waktu',
    	'tempat',
    ];

    public function pengurus()
    {
        return $this->hasMany('App\JadwalPengurus','id_jadwal_mengajar');
    }

    public function desaBinaan()
    {
        return $this->belongsTo('App\DesaBinaan', 'id_desa_binaan_jadwal');
    }

}
