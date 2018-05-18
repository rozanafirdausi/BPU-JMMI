<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Http\Requests;

class BarangController extends Controller
{
    public function index()
    {
    	return view('barang.barang');
    } 

    public function store(Request $request)
    {
    	Barang::create($request->all());
    	return redirect('barang');
    }
}
