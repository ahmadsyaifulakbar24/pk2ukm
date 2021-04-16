<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BudgedPerformanceRealization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS vw_budged_performance_realization');
        DB::statement('
            CREATE VIEW vw_budged_performance_realization AS
            SELECT 
                a.id, 
                a.user_id,
                a.budged,
                a.budged_realization1,
                a.document_budged_realization1,
                a.budged_realization2,
                a.document_budged_realization2,
                a.target_participant,
                participant1.target_participant1 AS realization_participant1,
                participant2.target_participant2 AS realization_participant2,
                a.target_companion,
                companion.realization_companion AS realization_companion
            FROM
            budged_performances a
            LEFT JOIN 
            (
                SELECT  b.user_id, COUNT(*) as target_participant1
                FROM participants AS a
                LEFT JOIN trainings AS b ON a.training_id = b.id
                WHERE MONTH(b.finish_date) BETWEEN 7 AND 12
                GROUP BY b.user_id
            ) AS participant1 ON a.user_id = participant1.user_id
            
            LEFT JOIN 
            
            (
                SELECT  b.user_id, COUNT(*) as target_participant2
                FROM participants AS a
                LEFT JOIN trainings AS b ON a.training_id = b.id
                WHERE MONTH(b.finish_date) BETWEEN 1 AND 6
                GROUP BY b.user_id
            ) AS participant2 ON participant1.user_id = participant2.user_id
            
            LEFT JOIN
            
            (
                SELECT parent_user_id, COUNT(*) as realization_companion
                FROM companions
                GROUP BY parent_user_id
            ) AS companion ON a.user_id = companion.parent_user_id
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
