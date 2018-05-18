<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DesaBinaan;

class DesaBinaanController extends Controller
{
    public function index()
    {
    	// $halaman='desa_binaan';
    	$desaBinaan = DesaBinaan::all();
    	return view('desaBinaan.desaBinaan',compact('desaBinaan'));
    }

    public function create()
    {
    	$halaman = 'desa_binaan';
    	return view('desaBinaan.desaBinaan', compact('halaman'));
    }
    public function store(Request $request)
    {
        DesaBinaan::create($request->all());
        return redirect('desaBinaan');
    }
    public function edit($id_desa_binaan)
    {
    	$desaBinaan = DesaBinaan::findOrFail($id_desa_binaan);
    	// dd($desaBinaan);
    	return view('desaBinaan.desaBinaan',compact('desaBinaan'));
    }
    public function update(Request $request, $id_desa_binaan)
    {
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
