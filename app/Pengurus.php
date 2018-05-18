<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus_jmmi';

    protected $fillable = [
    	'nama_pengurus',
    	'email',
    	'alamat_pengurus',
    	'notelp_pengurus',
    	'password_pengurus',
    	'jenis_kelamin'
    ];
}
