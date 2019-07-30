<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_pasien extends Model
{
    protected $table="data_pasien";

    protected $fillable= [
        'id_tb','id_kecamatan','id_faskes','nama_pasien','usia','alamat','tanggal_mulaipengobatan','latitude','longitude'
    ];

    public function kec()
    {
        return $this->belongsTo('App\data_kecamatan', 'id_kecamatan');
    }

    public function tb()
    {
        return $this->belongsTo('App\jenis_tb', 'id_tb');

    }

    public function faskes()
    {
        return $this->belongsTo('App\data_faskes', 'id_faskes');

    }

    public function riwayat()
    {
        return $this->hasMany('App\riwayat_pasien', 'id_pasien');
    }
}
