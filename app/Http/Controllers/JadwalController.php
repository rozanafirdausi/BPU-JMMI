<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal;
use App\Admin;
use App\DesaBinaan;
use App\JadwalPengurus;
use App\Pengurus;

class JadwalController extends Controller
{
    public function admin()
    {
    	$desaBinaan = DesaBinaan::all();
    	$jadwal = Jadwal::paginate(5);
    	return view('jadwalMengajar.adminJadwal', compact('desaBinaan','jadwal'));
    }  

    public function user()
    {
    	$desaBinaan = DesaBinaan::all();
    	$jadwal = Jadwal::paginate(5);

    	return view('user.userJadwal', compact('desaBinaan','jadwal'));
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

    public function daftar(Request $request, $id)
    {
    	$daftar['id_jadwal_mengajar'] = $id;
    	$daftar['id_pengurus'] = 1;

    	JadwalPengurus::create($daftar);
    	return redirect('userJadwal');
    }

    public function terdaftar()
    {    	
    	$jadwalTerdaftar = JadwalPengurus::where('id_pengurus',1)->get();
    	return view('user.userJadwalSaya', compact('jadwalTerdaftar')); 
    }

    public function terdaftarDestroy($id)
    {
    	$jadwal = JadwalPengurus::where('id_jadwal_pengurus',$id)->delete();
		return back();
    }
}
