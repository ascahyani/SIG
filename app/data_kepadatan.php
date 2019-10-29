<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_kepadatan extends Model
{
    protected $table = 'data_kepadatan';
    protected $fillable =[
        'luas_daerah', 'jumlah_penduduk', 'kepadatan_penduduk', 'tahun',
    ];

    public function kec()
    {
        return $this->belongsTo('App\data_kecamatan', 'id_kecamatan');
    }

    public function kepadatan()
    {
        return $this->hasMany('App\data_kepadatan', 'id_kepadatan');
    }
}
