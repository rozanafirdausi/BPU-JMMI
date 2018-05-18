<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangan2';

    protected $fillable = [
    	'id_admin',
    	'tanggal',
    	'item_pengeluaran/pemasukan',
    	'debit',
    	'kredit',
    	'jumlah_uang',
    	'keterangan',
    ];

    // public function admin()
    // {
    // 	return $this->belongsTo('App\Admin','id_admin');
    // }
}
