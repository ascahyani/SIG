<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\indeks_rtphbs;
use DB;

class IndeksController extends Controller
{
    public function index()
    {
        $indeks = indeks_rtphbs::all();

        return view ('data_indeks_rtphbs', ['indeks_rtphbs'=>$indeks]);
    }
    
    public function tambah()
    {
        $kecamatan=DB::table('data_kecamatan')->get();
        return view ('tambah_indeks')->with(['kecamatan'=>$kecamatan]);
    }

    
    public function store(Request $request)
    {
        DB::table('indeks_rtphbs')->insert([
            'id_kecamatan'=>$request->kecamatan,
            'tahun'=>$request->tahun,
            'jumlah_rtphbs'=>$request->jumlah

        ]);


        return redirect('data_indeks_rtphbs');
    }


    public function edit($id)
    {
        //ngambil data indeks rtohbs berdasarkan id
        $indeks_rtphbs =DB::table('indeks_rtphbs')->where('id',$id)->get();
        $kecamatan=DB::table('data_kecamatan')->get();

        return view('edit_indeks')->with([
            'kecamatan'=>$kecamatan,
            'indeks_rtphbs' => $indeks_rtphbs
            ]);
    }

    public function update(Request $request )
    {
        DB::table('indeks_rtphbs')->where('id',$request->id)->update([
            'id_kecamatan'=>$request->nama_kecamatan,
            'tahun'=>$request->tahun,
            'jumlah_rtphbs'=>$request->jumlah_rtphbs
        ]);

        return redirect('/data_indeks_rtphbs');

    }
    
}
