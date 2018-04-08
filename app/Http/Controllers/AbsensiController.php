<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AbsensiController extends Controller
{
    public function index()
    {
    	return view('admin.absensi');
    } 
}
