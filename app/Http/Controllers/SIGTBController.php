<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_faskes;
use App\data_pasien;
use App\riwayat_pasien;
use DB;

class SIGTBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(){
        return view ('admin');
    }

    public function login(){
        return view ('login');
    }


    public function peta_faskes() //untuk buat peta titik faskes
    {
        $data = data_faskes::all(); //panggil tabel faskes
        
        return view ('peta_faskes')->with([  //return ke peta_faskes dengan bikin variabel arr
            'arr' => $data
        ]);
       
    }


    //controller peta faskes yang lama
    public function peta_faskes2(Request $f)
    {   
        $bulan = $f->bulan;
        $tahun = $f->tahun;

        $data = DB::table('riwayat_pasien')
                    ->leftjoin('data_pasien', 'data_pasien.id', '=', 'riwayat_pasien.id_pasien')
                    ->leftjoin('data_faskes', 'data_faskes.id', '=', 'data_pasien.id_faskes')
                    ->select(   'data_faskes.nama_faskes', 
                                'data_faskes.latitude', 
                                'data_faskes.longitude', 
                                'data_faskes.alamat', 
                                DB::raw('count(riwayat_pasien.id_pasien) as jumlah_pasien'))
                    ->groupBy('data_pasien.id_faskes')
                    ->where('riwayat_pasien.tahun', $tahun)
                    ->where('riwayat_pasien.bulan',$bulan)
                    // ->pluck('total', 'data_pasien.nama_faskes');
                    ->get();
        // return $data;
        return view ('peta_faskes2')->with([  //return ke peta_pasien dengan bikin variabel faskes
            'faskes' => $data,
        ]);
        
        //return $data;
        // //return $data;
        
    }   


    //fungsi titik faskes supaya muncul semua 10 Okt19
    public function titik_faskes(Request $f)
    {
        //buat ngambil jumlah pasien di faskes tiap bulan
        $bulan = "Maret";
        $tahun = 2017; 

        $titik = DB::table('data_faskes')
                    ->leftjoin('data_pasien', 'data_pasien.id_faskes', '=', 'data_faskes.id')
                    ->leftjoin('riwayat_pasien', 'riwayat_pasien.id_pasien', '=', 'data_pasien.id')
                    ->select(   'data_faskes.nama_faskes', 
                                'data_faskes.latitude', 
                                'data_faskes.longitude', 
                                'data_faskes.alamat', 
                                DB::raw('count(riwayat_pasien.id_pasien) as jumlah_pasien'))
                    ->groupBy('data_faskes.id')
                    // ->where('riwayat_pasien.tahun', $tahun) //tiap bulan dan tahun
                    // ->where('riwayat_pasien.bulan',$bulan)
                    ->get();

        return $titik;
        // return view ('peta_faskes2')->with([  //return ke peta_pasien dengan bikin variabel faskes
        //     'jumlah_pasien' => $titik //manggil jumlah pasien di faskes itu
        // ]);

    }

    public function peta_pasien()
    {
        $data = riwayat_pasien::all();
        $bulan = null;
        $tahun = null;
        return view ('peta_pasien')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);
        
    }

    public function peta_pasienn(Request $r)
    {   
        $bulan = $r->bulan;
        $tahun = $r->tahun;

        $data = DB::table('riwayat_pasien')
                ->where('tahun', $tahun)
                ->where('bulan', $bulan)
                ->leftjoin('data_pasien', 'data_pasien.id', '=', 'riwayat_pasien.id_pasien')
                ->WhereNotIn('riwayat_pasien.status',['Meninggal', 'Sembuh'])
                ->get();
        
        // return $data;
        return view ('peta_pasien')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data,
            'tahun' => $tahun,
            'bulan' => $bulan
        ]);
    }   
  

    public function peta_rawan()
    {
        $data = riwayat_pasien::all();

        return view ('peta_rawan')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data
        ]);
        
    }

    public function poligon()
    {
        $data = riwayat_pasien::all();

        return view ('poligon')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data
        ]);
        
    }

    public function gpoligon()
    {
        $data = riwayat_pasien::all();

        return view ('gpoligon')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data
        ]);
        
    }
}
