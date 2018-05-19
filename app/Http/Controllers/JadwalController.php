<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal;
use App\Admin;
use App\DesaBinaan;

class JadwalController extends Controller
{
    public function admin()
    {
    	$desaBinaan = DesaBinaan::all();
    	$jadwal = Jadwal::all();
    	foreach ($jadwal as $jadwals) {
    		$jadwals->nama_desa_binaan = DesaBinaan::select('nama_desa_binaan')->where('id_desa_binaan','$jadwals->id_desa_binaan_jadwal');    		
    	}  	

    	return view('jadwalMengajar.adminJadwal', compact('desaBinaan','jadwal'));
    }  

    public function user()
    {
        return view('user.userJadwal');
    }

    public function store(Request $request)
    {

    	$jadwal['id_admin_jadwal'] = 1;
    	$jadwal['id_desa_binaan_jadwal'] = (int)$request->desa_binaan;
    	$jadwal['tanggal'] = $request->tanggal;
    	$jadwal['waktu'] = $request->waktu;
    	$jadwal['tempat'] = $request->tempat;

    	Jadwal::create($jadwal);
    	return redirect('adminJadwal');

    } 
	
    public function update(Request $request, $id)
    {
    	$jadwal = Jadwal::where('id_jadwal_mengajar',$id)->first();

    	$jadwal['id_admin_jadwal'] = 1;
    	$jadwal['id_desa_binaan_jadwal'] = (int)$request->desa_binaan;
    	$jadwal['tanggal'] = $request->tanggal;
    	$jadwal['waktu'] = $request->waktu;
    	$jadwal['tempat'] = $request->tempat;

    	$jadwal->save();
    	return redirect('adminJadwal');
    }

    public function destroy($id)
    {
    	$jadwal = Jadwal::where('id_jadwal_mengajar',$id)->delete();
    	return back();
    }
}
