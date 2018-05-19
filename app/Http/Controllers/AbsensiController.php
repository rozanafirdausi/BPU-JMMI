<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DesaBinaan;
use App\Jadwal;
use App\JadwalPengurus;
use App\JadwalAbsensi;

class AbsensiController extends Controller
{
    public function index()
    {
    	$jadwal = Jadwal::all();
    	$absensi = JadwalAbsensi::all();
    	foreach ($absensi as $absensis)
    	{
    		$pengurus = JadwalPengurus::where('id_jadwal_mengajar',$absensis->id_jadwal_mengajar)->get();
    	}
    	return view('absensi.absensi', compact('jadwal','absensi','pengurus'));
    }

    public function store(Request $request)
    {
        $absensi['id_jadwal_mengajar'] = $request->id_jadwal_mengajar;
        $absensi['id_absensi'] = 1;
        $absensi['jumlah_warga'] = $request->jumlah_warga;

        JadwalAbsensi::create($absensi);
    	return redirect('absensi');
    }

    public function pengurus($id)
    {
    	$pengurus = JadwalPengurus::where('id_jadwal_mengajar',$id)->get();    	
    	return back();
    }

    public function update(Request $request, $id)
    {    
    	$absensi = JadwalAbsensi::where('id_jadwal_absensi',$id)->first(); 
    	$absensi['id_jadwal_mengajar'] = $request->id_jadwal_mengajar;
    	$absensi['id_absensi'] = 1;
    	$absensi['jumlah_warga'] = (int)$request->jumlah_warga;

    	($absensi)->save();
    	return redirect('absensi');
    }

    public function destroy($id)
    {
        $absensi = JadwalAbsensi::where('id_jadwal_absensi',$id)->delete();
        return back();
    }
    
}
