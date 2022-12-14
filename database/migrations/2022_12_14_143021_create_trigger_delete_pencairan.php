<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerDeletePencairan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER del_pen
        AFTER DELETE ON `pencairans`
        FOR EACH ROW
        BEGIN
        UPDATE projects
        SET dana_terambil = dana_terambil - old.nominal
        WHERE id = old.projectid;
        END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `del_pen`');
    }
}