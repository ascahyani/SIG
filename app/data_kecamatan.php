<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_kecamatan extends Model
{
    protected $table = 'data_kecamatan';
    protected $fillable =[
        'nama_kecamatan', 'luas_daerah', 'jumlah_penduduk', 'kepadatan_penduduk', 'tahun', 'bulan', 'area'
    ];

    public function faskes()
    {
        return $this->hasMany('App\data_faskes', 'id_kecamatan');
    }

    public function indeks()
    {
        return $this->hasMany('App\indeks_rtphbs', 'id_kecamatan');
    }

    public function pasien()
    {
        return $this->hasMany('App\data_pasien', 'id_kecamatan');
    }
}
