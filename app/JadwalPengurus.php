<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPengurus extends Model
{
    //
    protected $table = 'jadwal_pengurus';
    protected $primaryKey = 'id_jadwal_pengurus';
    protected $fillable = [
    	'id_jadwal_mengajar',
    	'id_pengurus',    	
    ];

    public function jadwal()
    {
        return $this->belongsTo('App\Jadwal', 'id_jadwal_mengajar');
    }

    public function pengurus()
    {
    	return $this->belongsTo('App\Pengurus', 'id_pengurus');
    }
}
