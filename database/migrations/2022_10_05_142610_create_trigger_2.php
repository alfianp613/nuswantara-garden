<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTrigger2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER dana_min
        AFTER DELETE ON `payments`
        FOR EACH ROW
        BEGIN
        UPDATE projects
        SET dana_terkumpul = dana_terkumpul - old.nominal
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
        DB::unprepared('DROP TRIGGER `dana_min`');
    }
}