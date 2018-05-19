<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Keuangan;
use App\Admin;

class KeuanganController extends Controller
{
	public function index()
    {
    	$list_keuangan = Keuangan::all();
    	return view('keuangan.keuangan',compact('list_keuangan'));
    }
    
    public function store(Request $request)
    {
    	// dd($request->tanggal);
    	$list_keuangan['id_admin']=1;
    	$list_keuangan['tanggal']=$request->tanggal;
    	$list_keuangan['item_pemasukan_pengeluaran']=$request->item_pemasukan_pengeluaran;
    	$list_keuangan['debit']=$request->debit;
    	$list_keuangan['kredit']=$request->kredit;
    	$list_keuangan['jumlah_uang']=$request->jumlah_uang;
    	$list_keuangan['keterangan']=$request->keterangan;
    	Keuangan::create($list_keuangan);
    	return redirect('keuangan');
    	// Keuangan::create($request->all());
    	// return redirect('keuangan');
    }

    public function edit($id)
    {
    	$list_keuangan= Keuangan::findOrFail($id);
    	return view('keuangan.keuangan',compact('list_keuangan'));
    }
    public function update(Request $request,$id)
    {
    	$list_keuangan = Keuangan::findOrFail($id);
    	$list_keuangan->update($request->all());
    	return redirect('keuangan');
    }
    public function destroy($id)
    {
    	$list_keuangan = Keuangan::where('id',$id)->delete();
    	return back();
    }
}
