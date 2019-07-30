<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indeks_rtphbs extends Model
{
    protected $table = 'indeks_rtphbs';
    protected $fillable =[
        'id_kecamatan', 'tahun', 'jumlah_rtphbs'
    ];

    public function kec()
    {
        return $this->belongsTo('App\data_kecamatan', 'id_kecamatan');
    }
}
