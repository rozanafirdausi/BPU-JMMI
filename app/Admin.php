<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'nama_admin',
        'email_admin',
        'notelp',
        'alamat',
        'password_admin',
        'jenis_kelamin',
    ];

    // public function keuangan()
    // {
    //     return $this->hasMany('App\Keuangan','id_admin');
    // }
}
