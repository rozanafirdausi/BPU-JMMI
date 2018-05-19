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
    	// dd($data);
    	return view('barang.barang', compact('data'));
    } 

    public function store(Request $request)
    {
    	Barang::create($request->all());
    	return redirect('barang');
    }

    public function edit($id)
    {
    	$data = Barang::findOrFail($id);
    	return view('barang.barang', compact('data'));
    }

    public function update(Request $request, $id)
    {
    	$data = Barang::where('id_barang',$id)->first();  	
    	$data->nama_barang = $request->nama_barang;
    	$data->harga_barang = $request->harga_barang;
    	$data->harga_jual = $request->harga_jual;
    	$data->stok = $request->stok;
    	$data->save();
    	return redirect('barang');

    }

    public function destroy(Request $request, $id)
    {
    	$data = Barang::where('id_barang',$id)->delete();
    	return back();
    }
}
