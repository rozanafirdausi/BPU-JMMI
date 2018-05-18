<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DesaBinaan;

class DesaBinaanController extends Controller
{
    public function index()
    {
    	return view('desaBinaan.desaBinaan');
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
}
