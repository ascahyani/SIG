<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKecamatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kecamatan');
            $table->integer('luas_daerah');
            $table->integer('jumlah_penduduk');
            $table->integer('kepadatan_penduduk');
            $table->string('tahun');
            $table->string('bulan');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kecamatan');
    }
}
