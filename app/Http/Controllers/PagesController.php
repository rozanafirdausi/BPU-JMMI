<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function homepage()
    {
    	return view('pages.welcome');
    }   

    public function admin(Request $request)
    {
    	// $data = $request->all();
    	// dd($data);
    	return view('admin.admin');
    }

    public function user()
    {
    	return view('user.user');
    }
}
