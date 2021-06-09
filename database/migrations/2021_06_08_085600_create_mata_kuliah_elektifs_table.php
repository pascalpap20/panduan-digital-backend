<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahElektifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah_elektifs', function (Blueprint $table) {
            $table->id();
            $table->integer('MataKuliahId');
            $table->string('Kode');
            $table->string('Nama');
            $table->integer('Sks');
            $table->integer('SksKuliah');
            $table->integer('SksPraktikum');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah_elektifs');
    }
}
