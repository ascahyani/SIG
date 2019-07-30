<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_faskes extends Model
{
    protected $table = 'data_faskes';
    protected $fillable =[
        'nama_faskes', 'latitude', 'logitude', 'alamat', 'ketersediaan_alat'
    ];

    public function kec()
    {
        return $this->belongsTo('App\data_kecamatan', 'id_kecamatan');
    }

    public function pasien()
    {
        return $this->hasMany('App\data_pasien', 'id_faskes');
    }
}
