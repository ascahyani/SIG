<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataFaskesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_faskes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan')->onDelete('CASCADE');
             $table->string('nama_faskes');
             $table->string('latitude');
             $table->string('longitude');
             $table->string('alamat');
             $table->string('ketersediaan_alat');
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
        Schema::dropIfExists('data_faskes');
    }
}
