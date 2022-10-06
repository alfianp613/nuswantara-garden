<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTriggerPencairans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER pencairan
        AFTER INSERT ON `pencairans`
        FOR EACH ROW
        BEGIN
        UPDATE projects
        SET dana_terambil = dana_terambil + new.nominal
        WHERE id = new.projectid;
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
        DB::unprepared('DROP TRIGGER `pencairan`');
    }
}