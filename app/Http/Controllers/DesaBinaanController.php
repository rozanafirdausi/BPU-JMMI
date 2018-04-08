<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DesaBinaanController extends Controller
{
    public function index()
    {
    	return view('admin.desaBinaan');
    } 
}
