<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BarangController extends Controller
{
    public function index()
    {
    	return view('barang.barang');
    } 

    public function store(Request $request)
    {
    	$data = $request->all();
        dd($data);
    }
}
