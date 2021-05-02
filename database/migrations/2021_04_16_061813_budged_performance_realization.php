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
                IFNULL(participant1.target_participant1, 0) AS realization_participant1,
                IFNULL(participant2.target_participant2, 0) AS realization_participant2,
                a.target_companion,
                IFNULL(companion1.realization_companion1, 0) AS realization_companion1,
                IFNULL(companion2.realization_companion2, 0) AS realization_companion2
            FROM
            budged_performances a
            LEFT JOIN 
            (
                SELECT  b.user_id, COUNT(*) as target_participant1
                FROM participants AS a
                LEFT JOIN trainings AS b ON a.training_id = b.id
                WHERE MONTH(b.finish_date) BETWEEN 1 AND 6
                GROUP BY b.user_id
            ) AS participant1 ON a.user_id = participant1.user_id
            
            LEFT JOIN 
            
            (
                SELECT  b.user_id, COUNT(*) as target_participant2
                FROM participants AS a
                LEFT JOIN trainings AS b ON a.training_id = b.id
                WHERE MONTH(b.finish_date) BETWEEN 7 AND 12
                GROUP BY b.user_id
            ) AS participant2 ON participant1.user_id = participant2.user_id
            
            LEFT JOIN
            
            (
                SELECT parent_user_id, user_id, COUNT(*) as realization_companion1
                FROM companions
                WHERE MONTH(companions.created_at) BETWEEN 1 AND 6
                GROUP BY parent_user_id
            ) AS companion1 ON a.user_id = companion1.parent_user_id

            LEFT JOIN
            
            (
                SELECT parent_user_id, COUNT(*) as realization_companion2
                FROM companions
                WHERE MONTH(companions.created_at) BETWEEN 7 AND 12
                GROUP BY parent_user_id
            ) AS companion2 ON companion1.user_id = companion2.parent_user_id
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
