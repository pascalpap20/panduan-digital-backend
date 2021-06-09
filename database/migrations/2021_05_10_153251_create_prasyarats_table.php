<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrasyaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prasyarats', function (Blueprint $table) {
            $table->increments('id_prasyarat');
            $table->string('nama_mata_kuliah');
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
        Schema::dropIfExists('prasyarats');
    }
}
