<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenPengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_pengajars', function (Blueprint $table) {
            $table->increments('id_dosen_pengajar');
            $table->string('nama_dosen');
            $table->string('nrp');
            $table->integer('id_mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosen_pengajars');
    }
}
