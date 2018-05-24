<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = Admin::paginate(5);
    	return view('admin.admin',compact('admin'));
    }
    public function store(Request $request)
    {
        Admin::create($request->all());
        return redirect('kelolaadmin');
    }
    public function destroy($id_admin)
    {
    	$admin = Admin::where('id_admin',$id_admin)->delete();
    	return back();
    }
}
