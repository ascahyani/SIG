<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_kepadatan;
use DB;

class KepadatanController extends Controller
{
    public function index(){

        //ambil data kepadatan
        $kepadatan = data_kepadatan::all();

        //mengirm data kec ke view kepadatan
        return view ('data_kepadatan', ['data_kepadatan'=> $kepadatan]);
    }

    public function tambah()
    {
        $kecamatan = DB::table('data_kecamatan')->get();
        return view ('tambah_kepadatan')-> with([
           'kecamatan' => $kecamatan
        ]);
    }

    public function store(Request $request)
    {
        
        DB::table('data_kepadatan')->insert([
            'id_kecamatan'=>$request->kecamatan,
            'luas_daerah'=>$request->luas_daerah,
            'jumlah_penduduk'=>$request->jumlah_penduduk,
            'kepadatan_penduduk'=>$request->kepadatan_penduduk,
            'tahun'=>$request->tahun,
          
        ]);

    
        return redirect('/data_kepadatan');

    }

    public function edit($id)
    {
        //ngambil data kepadatan based id yg dipilih
        $kepadatan=DB::table('data_kepadatan')->where('id',$id)->get(); 
        
        //passing data kepadatan ke view
        return view('edit_kepadatan',['kepadatan'=>$kepadatan]);
    }

    public function update(Request $request)
    {
        //update data kepadatan
        DB::table('data_kepadatan')->where('id',$request->id)->update([
            'id_kecamatan'=>$request->nama_kecamatan,
            'luas_daerah'=>$request->luas_daerah,
            'jumlah_penduduk'=>$request->jumlah_penduduk,
            'kepadatan_penduduk'=>$request->kepadatan_penduduk,
            'tahun'=>$request->tahun,
            
        ]);

        return redirect('/data_kepadatan');
    }

    public function hapus($id)
    {
        //menghapus data berdasarkan id yg dipilih
        DB::table('data_kepadatan')->where('id',$id)->delete();

        //balik kehalaman depan
        return redirect('/data_kepadatan');
    }
}
