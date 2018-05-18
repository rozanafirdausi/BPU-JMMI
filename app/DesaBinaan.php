<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesaBinaan extends Model
{
    protected $table = 'desa_binaan';

    protected $fillable = [
        'nama_desa_binaan',
        'alamat_desa_binaan',
        'contact_person',
        'telp_contact_person',
        'jumlah_warga',
    ];
}
