<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Http\Requests;

class BarangController extends Controller
{
    public function index()
    {
    	$data = Barang::all();
    	return view('barang.barang', compact('data'));
    } 

    public function store(Request $request)
    {
    	Barang::create($request->all());
    	return redirect('barang');
    }

    public function edit(Request $request)
    {
    	
    }
}
