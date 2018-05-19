<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bantuan;
use App\Admin;
class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bantuan = Bantuan::all();
        return view('bantuan.bantuan',compact('bantuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $bantuans['id_admin'] = 1;
        $bantuans['nama_donatur'] = $request->nama_donatur;
        $bantuans['jenis_bantuan'] = $request->jenis_donasi;
        $bantuans['jumlah_bantuan'] = $request->jumlah_donasi;

        Bantuan::create($bantuans);
        return redirect('bantuan');
    }

    public function edit($id)
    {
        $bantuans = Bantuan::findOrFail($id);
        return view('bantuan.bantuan', compact('bantuans'));
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
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $$data = Barang::where('id_barang',$id)->first();
        $bantuans = Bantuan::where('id_bantuan',$id)->first();        
        $bantuans['id_admin'] = 1;
        $bantuans['nama_donatur'] = $request->nama_donatur;
        $bantuans['jenis_bantuan'] = $request->jenis_donasi;
        $bantuans['jumlah_bantuan'] = $request->jumlah_donasi;

        $bantuans->save();
        return redirect('bantuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bantuan = Bantuan::where('id_bantuan',$id)->delete();
        return back();
    }
}
