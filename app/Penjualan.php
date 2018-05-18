<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'transaksi_penjualan';
    
    protected $fillable = [
    	'id_admin',
    	'jumlah_terjual'
    ];
}
