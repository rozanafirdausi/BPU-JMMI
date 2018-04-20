<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AbsensiController extends Controller
{
    public function index()
    {
    	return view('absensi.absensi');
    } 

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
