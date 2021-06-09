<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivitasIpbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civitas_ipbs', function (Blueprint $table) {
            $table->increments('id_civitas_ipb');
            $table->string('username');
            $table->string('password');
            $table->string('nim', 9);
            $table->boolean('isStaff');
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
        Schema::dropIfExists('civitas_ipbs');
    }
}
