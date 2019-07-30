<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan')->onDelete('CASCADE');

            $table->unsignedInteger('id_tb');
            $table->foreign('id_tb')->references('id')->on('jenis_tb')->onDelete('CASCADE');

            $table->unsignedInteger('id_faskes');
            $table->foreign('id_faskes')->references('id')->on('data_faskes')->onDelete('CASCADE');

            $table->string('latitude');
            $table->string('longitude');
            $table->string('alamat');
            $table->date('tanggal_mulaipengobatan');
            $table->string('nama_pasien');
            $table->integer('usia');
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
        Schema::dropIfExists('data_pasien');
    }
}
