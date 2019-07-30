<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_tb extends Model
{
    protected $table='jenis_tb';
    protected $fillable=['jenis_tb','nama'];

    public function pasien()
    {
        return $this->hasMany('App\data_pasien', 'id_tb');
    }
}
