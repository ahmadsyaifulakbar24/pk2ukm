<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalByEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_participant_by_education");
        DB::statement("
            CREATE VIEW vw_total_participant_by_education AS
            SELECT 
                a.param as education, 
                COUNT(education_id) as total
            FROM params a
            LEFT JOIN participants b ON a.id = b.education_id
            WHERE a.category_param = 'education'
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
