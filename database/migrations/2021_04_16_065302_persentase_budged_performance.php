<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PersentaseBudgedPerformance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS vw_persentase_budged_performance');
        DB::statement('
            CREATE VIEW vw_persentase_budged_performance AS
            SELECT 
                (SUM(a.budged_realization1) + SUM(a.budged_realization2)) AS total_budged_realization, 
                (((SUM(a.budged_realization1) + SUM(a.budged_realization2)) * 100) / SUM(a.budged)) as persentase_budged_realization,
                (SUM(a.realization_participant1) + SUM(a.realization_participant2)) AS total_participant_realization,
                (((SUM(a.realization_participant1) + SUM(a.realization_participant2) * 100)) / SUM(a.target_participant)) as persentase_participant_realization,
                SUM(a.realization_companion) as total_companion_realization,
                (SUM(a.realization_companion) * 100) / SUM(a.target_companion) AS persentase_companion_realization
            FROM `vw_budged_performance_realization` AS a
        ');
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
