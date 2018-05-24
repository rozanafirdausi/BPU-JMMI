<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'transaksi_penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $fillable = [
    	'id_admin',
    	'jumlah_terjual',
        'id_barang'
    ];

    public function barang()
    {
    	// return $this->belongsToMany('App\Barang','transaksipenjualan_barang','id_barang','id_penjualan')->withTimeStamps();
        return $this->belongsTo('App\Barang', 'id_barang');
    }
}
