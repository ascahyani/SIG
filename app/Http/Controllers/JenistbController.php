<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\jenis_tb;
use DB;

class JenistbController extends Controller
{
    public function index(){
        $jenistb= jenis_tb::all();
        return view('data_jenistb', ['jenis_tb'=>$jenistb]);
    }

    public function tambah()
    {
        return view('tambah_jenistb');
    }

    public function store(Request $request)
    {
        DB::table('jenis_tb')->insert([
            'jenis_tb'=>$request->jenis_tb,
            'nama'=>$request->nama
        ]);

        return redirect('data_jenistb');
    }

public function edit($id)
{
    //mengambil data jenisTB based id yang dipilih
    $jenis_tb = DB::table('jenis_tb')->where('id',$id)->get();

    //passin data jenistb yg didapat ke view edit.blade
    return view('edit_jenistb')->with([
        'jenis_tb' => $jenis_tb
    ]);
}

public function update(Request $request)
{
    //update data jenisTB
    DB::table('jenis_tb')->where('id',$request->id)->update([
        'jenis_tb'=>$request->jenis_tb,
        'nama'=>$request->nama
    ]);

    return redirect('data_jenistb');
}
}
