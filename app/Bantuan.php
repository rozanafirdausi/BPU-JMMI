<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    //
    protected $table = 'transaksi_bantuan';
    protected $primaryKey = 'id_bantuan';
    protected $fillable = [
    	'id_admin',
    	'nama_donatur',
    	'jenis_bantuan',
    	'jumlah_bantuan',
    ];
}
