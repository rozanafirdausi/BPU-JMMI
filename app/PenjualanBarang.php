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

    public function barang()
    {
    	return $this->belongsTo('App\Barang');
        // return $this->hasMany('App/PenjualanBarang', 'id_penjualan_barang');
    }

    public function penjualan()
    {
    	return $this->belongsTo('App\Penjualan');
        // return $this->hasMany('App/PenjualanBarang', 'id_penjualan_barang');
    }
}
