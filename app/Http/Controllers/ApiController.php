<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//untuk manggil database nya
use App\data_kepadatan;
use App\indeks_rtphbs;
use App\data_faskes;
use App\data_pasien;
use App\data_kecamatan;
use App\riwayat_pasien;
use DB;

class ApiController extends Controller
{
    public function poligon()
    {
        $warna = array('#2ecc71', '#f1c40f', '#f39c12', '#f94503', '#f90404');
        $response = array();
        
    }
}
