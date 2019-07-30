<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndeksRtphbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indeks_rtphbs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('data_kecamatan')->onDelete('CASCADE');
            $table->integer('tahun');
            $table->integer('jumlah_rtphbs');
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
        Schema::dropIfExists('indeks_rtphbs');
    }
}
