<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class riwayat_pasien extends Model
{
    protected $table="riwayat_pasien";
    protected $fillable=[
        'id_Pasien', 'tahun','bulan','status'
    ];

    public function pasien()
    {
        return $this->belongsTo('App\data_pasien', 'id_pasien');
    }
}
