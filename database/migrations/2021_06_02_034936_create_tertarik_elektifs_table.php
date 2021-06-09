<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTertarikElektifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tertarik_elektifs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nim', 9);
            $table->integer('id_mata_kuliah');
            $table->integer('id_civitas_ipb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tertarik_elektifs');
    }
}
