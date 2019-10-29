<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_faskes;
use App\data_pasien;
use App\riwayat_pasien;
use DB;

class PengunjungController extends Controller
{
    public function peta_faskes_p() //untuk buat peta titik faskes
    {
        $data = data_faskes::all(); //panggil tabel faskes
        
        return view ('peta_faskes_p')->with([  //return ke peta_faskes dengan bikin variabel arr
            'arr' => $data
        ]);
       
    }

    public function peta_faskes2_p(Request $f)
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
        return view ('peta_faskes2_p')->with([  //return ke peta_pasien dengan bikin variabel faskes
            'faskes' => $data,
        ]);
        
        //return $data;
        // //return $data;
        
    }   

    public function peta_pasien_p()
    {
        $data = riwayat_pasien::all();
        $bulan = null;
        $tahun = null;
        return view ('peta_pasien_p')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);
        
    }

    public function peta_pasienn_p(Request $r)
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
        return view ('peta_pasien_p')->with([  //return ke peta_pasien dengan bikin variabel arr
            'pasien' => $data,
            'tahun' => $tahun,
            'bulan' => $bulan
        ]);
    }   
}
