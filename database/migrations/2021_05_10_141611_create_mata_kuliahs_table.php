<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mata_kuliah');
            $table->string('nama_departemen');
            $table->text('deskripsi');
            $table->integer('id_civitas_ipb');
            $table->string('kode_mk');
            $table->string('semester');
            $table->string('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliahs');
    }
}
