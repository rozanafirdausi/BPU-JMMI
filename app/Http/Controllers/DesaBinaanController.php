<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DesaBinaanController extends Controller
{
    public function index()
    {
    	return view('desaBinaan.desaBinaan');
    } 

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
