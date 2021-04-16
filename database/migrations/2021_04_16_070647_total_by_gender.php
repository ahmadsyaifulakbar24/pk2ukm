<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalByGender extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_participant_by_gender");
        DB::statement("
            CREATE VIEW vw_total_participant_by_gender AS
            SELECT 
                laki_laki.total_laki_laki AS total_laki_laki,
                perempuan.total_perempuan AS total_perempuan
            FROM 
            (SELECT COUNT(*) as total_laki_laki FROM participants WHERE gender = 'laki-laki') AS laki_laki,
            (SELECT COUNT(*) as total_perempuan FROM participants WHERE gender = 'perempuan') AS perempuan
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
