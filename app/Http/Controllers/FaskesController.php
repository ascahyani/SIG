<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_faskes;
use DB;

class FaskesController extends Controller
{
    public function index(){
        $faskes = data_faskes::all();
        $kecamatan = DB::table('data_kecamatan')->get();
        return view ('data_faskes')-> with([
            'kecamatan' => $kecamatan,
            'data_faskes' => $faskes
            ]);
    }

    public function tambah()
    {
        $kecamatan = DB::table('data_kecamatan')->get();
        return view ('tambah_faskes')-> with([
           'kecamatan' => $kecamatan
        ]);
        
    }


    public function store(Request $request)
    {
        DB::table('data_faskes')->insert([
            'id_kecamatan'=>$request->kecamatan,
            'nama_faskes'=>$request->nama_faskes,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'alamat'=>$request->alamat,
            'ketersediaan_alat'=>$request->ketersediaan_alat
        ]);

        return redirect('data_faskes');
    }


    public function edit($id)
    {
        $data_faskes =DB::table('data_faskes')->where('id',$id)->get();
        $kecamatan=DB::table('data_kecamatan')->get();

        return view('edit_faskes')->with([
            'kecamatan'=>$kecamatan,
            'data_faskes'=>$data_faskes
        ]);
    }

    public function update (Request $request)
    {
        DB::table('data_faskes')->where('id',$request->id)->update([
            'id_kecamatan'=>$request->nama_kecamatan,
            'nama_faskes'=>$request->nama_faskes,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
            'alamat'=>$request->alamat,
            'ketersediaan_alat'=>$request->ketersediaan_alat
        ]);

        return redirect('/data_faskes');
    }

    
}
