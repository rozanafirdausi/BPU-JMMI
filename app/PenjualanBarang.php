<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenjualanBarang extends Model
{
    protected $table = 'transaksipenjualan_barang';
    protected $primaryKey='id_transaksipenjualan_barang';
    protected $fillable = [
    	'id_penjualan_barang',
    	'id_barang'
    ];
}
