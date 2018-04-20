<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KeuanganController extends Controller
{
	public function index()
    {
    	return view('keuangan.keuangan');
    }   

    public function store(Request $request)
    {
    	$data = $request->all();
    	dd($data);
    }
}
