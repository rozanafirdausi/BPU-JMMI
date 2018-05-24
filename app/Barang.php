<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
        
    protected $fillable = [
    	'nama_barang',
    	'harga_barang',
    	'harga_jual',
    	'stok'
    ];

    public function penjualan()
    {
    	// return $this->belongsToMany('App\Penjualan','transaksipenjualan_barang','id_barang','id_penjualan');
        return $this->hasMany('App\Penjualan', 'id_barang');
    }
}
