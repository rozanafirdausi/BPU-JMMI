<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penjualan;
use App\Barang;
use App\PenjualanBarang;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penjualan::paginate(5);
        $barangs = Barang::all();
        return view('penjualan.penjualan',compact('data','barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Barang::list('nama_barang','id_barang');
        // return view('penjualan.penjualan',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['id_admin'] = 1;
        $data['jumlah_terjual'] = (int)$request->jumlah_terjual;
        $data['id_barang'] = (int)$request->nama_barang;
        Penjualan::create($data);
        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Penjualan::where('id_penjualan',$id)->first();
        $data['id_admin'] = 1;
        $data['jumlah_terjual'] = (int)$request->jumlah_terjual;
        $data['id_barang'] = (int)$request->nama_barang;
        $data->save();
        return redirect('penjualan');
        // $data = Penjualan::findOrFail($id);
        // $data->update($request->all());
        // return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Penjualan::where('id_penjualan',$id)->delete();
        return back();
    }
}
