<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_faskes;
use App\data_pasien;

class SIGTBController extends Controller
{
    public function admin(){
        return view ('admin');
    }

    public function peta_faskes()
    {
        $data = data_faskes::all();
        return view ('peta_faskes')->with([
            'd' => $data
        ]);
    }

    public function peta_pasien()
    {
        $data = data_pasien::all();
        return view ('peta_pasien')->with([
            'pasien' => $data
        ]);
    }
}
