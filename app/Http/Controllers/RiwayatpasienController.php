<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\riwayat_pasien;
use DB;

class RiwayatpasienController extends Controller
{
    public function Index()
    {
        $riwayat= riwayat_pasien::all();

        $data_pasien = DB::table('data_pasien')->get();
        return view ('data_riwayat_pasien')-> with([
            'data_pasien' => $data_pasien,
            'riwayat_pasien' => $riwayat
            ]);

    }

    public function tambah()
    {
        $data_pasien = DB::table('data_pasien')->get();
        return view ('tambah_riwayatpasien')-> with([
           'data_pasien' => $data_pasien
        ]);
        
    }

    public function store(Request $request)
    {
        DB::table('riwayat_pasien')->insert([
            'id_pasien'=>$request->nama_pasien,
            'tahun'=>$request->tahun,
            'bulan'=>$request->bulan,
            'status'=>$request->status
        ]);

        return redirect('data_riwayat_pasien');
    }

    
    public function edit($id)
    {
        $riwayat_pasien =DB::table('riwayat_pasien')->where('id',$id)->get();
        $data_pasien=DB::table('data_pasien')->get();

        return view('edit_riwayatpasien')->with([
            'data_pasien'=>$data_pasien,
            'riwayat_pasien'=>$riwayat_pasien
        ]);
    }

    public function update (Request $request)
    {
        DB::table('riwayat_pasien')->where('id',$request->id)->update([
            'id_pasien'=>$request->nama_pasien,
            'tahun'=>$request->tahun,
            'bulan'=>$request->bulan,
            'status'=>$request->status
        ]);

        return redirect('/data_riwayat_pasien');
    }
}
