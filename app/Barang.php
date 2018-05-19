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

    // public function transaksipenjualan_barang()
    // {
    	
    // }
}
