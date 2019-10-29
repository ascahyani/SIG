<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKepadatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kepadatan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan')->onDelete('CASCADE');
            $table->decimal(5,3)('luas_daerah');
            $table->integer('jumlah_penduduk');
            $table->integer('kepadatan_penduduk');
            $table->string('tahun');
         
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
        Schema::dropIfExists('data_kepadatan');
    }
}
