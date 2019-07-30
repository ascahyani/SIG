<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_pasien;
use DB;

class PasienController extends Controller
{
    public function index()
    {
        $pasien= data_pasien::all();

        $kecamatan = DB::table('data_kecamatan')->get();
        return view ('data_pasien_tb')-> with([
            'kecamatan' => $kecamatan,
            'data_pasien' => $pasien
            ]);

        $tb = DB::table('jenis_tb')->get();
        return view ('data_pasien_tb')-> with([
        'jenis_tb' => $tb,
        'data_pasien' => $pasien
        ]);


        $faskes = DB::table('data_faskes')->get();
        return view ('data_pasien_tb')-> with([
        'data_faskes' => $faskes,
        'data_pasien' => $pasien
        ]);
    }

    public function tambah()
    {
        $kec = DB::table('data_kecamatan')->get();
        $tb = DB::table('jenis_tb')->get();
        $faskes = DB::table('data_faskes')->get();
        return view ('tambah_datapasien')-> with([
            'kecamatan' => $kec,
            'jenis_tb' => $tb,
            'faskes' => $faskes
            ]);
       

       
    }

    public function store(Request $request)
    {
        $data_pasien = DB::table('data_pasien')->insert([
            'id_kecamatan'=>$request->id_kecamatan,
            'id_tb'=>$request->id_jenis_tb,
            'id_faskes' => $request->id_faskes,
            'nama_pasien' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'tanggal_mulaipengobatan' => $request->tanggal
        ]);

        return redirect('data_pasien_tb');
    }

    public function edit($id)
    {
        $pasien=DB::table('data_pasien')->where('id',$id)->get();
        $kecamatan=DB::table('data_kecamatan')->get();
        $faskes=DB::table('data_faskes')->get();
        $jenis_tb=DB::table('jenis_tb')->get();

        return view ('edit_pasien')-> with([
            'kecamatan' => $kecamatan,
            'jenis_tb' => $jenis_tb,
            'faskes' => $faskes,
            'data_pasien'=>$pasien
            ]);
    }

    public function update(Request $request)
    {
        DB::table('data_pasien')->where('id',$request->id)->update([
            'id_kecamatan'=>$request->nama_kecamatan,
            'id_faskes'=>$request->faskes,
            'id_tb'=>$request->jenis_tb,
            'nama_pasien'=>$request->nama,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'alamat'=>$request->alamat,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'tanggal_mulaipengobatan'=>$request->mulai_pengobatan
        ]);

        return redirect('/data_pasien_tb');
    }

    public function hapus($id)
    {
        //menghapus data berdasarkan id yg dipilih
        DB::table('data_pasien')->where('id',$id)->delete();

        //balik kehalaman depan
        return redirect('/data_pasien_tb');
    }
}
