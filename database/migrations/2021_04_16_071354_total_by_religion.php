<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalByReligion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_participant_by_religion");
        DB::statement("
        CREATE VIEW vw_total_participant_by_religion AS
            SELECT 
                a.param as religion, 
                COUNT(religion_id) as total
            FROM params a
            LEFT JOIN participants b ON a.id = b.religion_id
            WHERE a.category_param = 'religion'
            GROUP BY a.param
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
