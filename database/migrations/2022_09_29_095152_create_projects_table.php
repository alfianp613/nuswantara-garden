<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petaniid');
            $table->string("title");
            $table->string("slug")->unique();
            $table->enum('status_project',['Perencanaan','Berjalan','Selesai']);
            $table->decimal('dana_terkumpul',$precision=20, $scale=2)->nullable();
            $table->decimal('target_pendanaan',$precision=20, $scale=2);
            $table->text('excerpt');
            $table->text('deskripsi_project');
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
        Schema::dropIfExists('projects');
    }
}