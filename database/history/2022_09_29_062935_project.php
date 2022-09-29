<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id('projectid');
            $table->unsignedBigInteger('petaniid');
            $table->enum('status_project',['Perencanaan','Berjalan','Selesai']);
            $table->decimal('dana_terkumpul',$precision=15, $scale=2);
            $table->text('deskripsi_project');
            $table->decimal('target_pendanaan',$precision=15, $scale=2);
            $table->foreign('petaniid')->references('petaniid')->on('petani');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
