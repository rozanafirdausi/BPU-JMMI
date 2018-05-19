<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangan2';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id_admin',
    	'tanggal',
    	'item_pengeluaran/pemasukan',
    	'debit',
    	'kredit',
    	'jumlah_uang',
    	'keterangan',
    ];
}
