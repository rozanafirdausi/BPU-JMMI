<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JadwalController extends Controller
{
    public function admin()
    {
    	return view('jadwalMengajar.adminJadwal');
    }  

    public function user()
    {
        return view('user.userJadwal');
    }  
}
