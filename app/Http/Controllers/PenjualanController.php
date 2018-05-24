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
        $data = Penjualan::all();
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

        // $data = Penjualan::orderBy('id_penjualan', 'desc')->first();
        // // dd($data);
        // $penjualanbarang['id_penjualan_barang'] = $data->id_penjualan;
        // $penjualanbarang['id_barang'] = $data->barang->id_barang;
        // // $data->barang()->attach($request->input('barang'));
        // PenjualanBarang::create($penjualanbarang);
        return redirect('penjualan');

        // $data = Barang::list('nama_barang','id_barang');
        // return view('penjualan.penjualan',compact('data'));
    }
    // public function store(Request $request)
    // {
    //     $absensi['id_jadwal_mengajar'] = $request->id_jadwal_mengajar;
    //     $absensi['id_absensi'] = 1;
    //     $absensi['jumlah_warga'] = $request->jumlah_warga;

    //     JadwalAbsensi::create($absensi);
    //     return redirect('absensi');
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
