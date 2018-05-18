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
    	$desa_binaan_list = DesaBinaan::all();
    	return view('desaBinaan.desaBinaan',compact('desa_binaan_list'));
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
    public function destroy($id_desa_binaan)
    {
    	$desaBinaan = DesaBinaan::findOrFail($id_desa_binaan);
    	$desaBinaan->delete();
    	return redirect('desaBinaan.desaBinaan');
    }
}
