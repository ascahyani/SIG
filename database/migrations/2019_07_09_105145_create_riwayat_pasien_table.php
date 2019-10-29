<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pasien');
            $table->foreign('id_pasien')->references('id')->on('data_pasien')->onDelete('CASCADE');
            $table->integer('tahun');
            $table->string('bulan');
            $table->string('jenis_tindakan');
            $table->string('status');
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
        Schema::dropIfExists('riwayat_pasien');
    }
}
