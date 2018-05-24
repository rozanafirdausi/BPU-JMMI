<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\DesaBinaan;

class DesaBinaanController extends Controller
{
    public function index()
    {
    	// $halaman='desa_binaan';
    	$desaBinaan = DesaBinaan::paginate(5);
    	return view('desaBinaan.desaBinaan',compact('desaBinaan'));
    }
    public function store(Request $request)
    {
        DesaBinaan::create($request->all());
        return redirect('desaBinaan');
    }
    public function edit($id_desa_binaan)
    {
    	$desaBinaan = DesaBinaan::findOrFail($id_desa_binaan);
    	return view('desaBinaan.desaBinaan',compact('desaBinaan'));
    }
    public function update(Request $request, $id_desa_binaan)
    {
    	// $data = Barang::where('id_barang',$id)->first();  	
    	// $data->nama_barang = $request->nama_barang;
    	// $data->harga_barang = $request->harga_barang;
    	// $data->harga_jual = $request->harga_jual;
    	// $data->stok = $request->stok;
    	// $data->save();
    	// return redirect('barang');

    	// $desaBinaan = DesaBinaan::where('id_desa_binaan',$id_desa_binaan)->first();
    	$desaBinaan = DesaBinaan::findOrFail($id_desa_binaan);

    	$desaBinaan->update($request->all());
    	return redirect('desaBinaan');
    }
    public function destroy($id_desa_binaan)
    {
    	$desaBinaan = DesaBinaan::where('id_desa_binaan',$id_desa_binaan)->delete();
    	return back();
    }
}
