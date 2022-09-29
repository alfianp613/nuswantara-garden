<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Petani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petani', function (Blueprint $table) {
            $table->id('petaniid');
            $table->unsignedBigInteger('roleid');
            $table->string('komoditas');
            $table->string('alamat');
            $table->binary('foto');
            $table->mediumInteger('nik');
            $table->foreign('roleid')->references('roleid')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petani');
    }
}
