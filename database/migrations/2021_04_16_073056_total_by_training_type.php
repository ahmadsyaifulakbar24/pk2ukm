<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalByTrainingType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_participant_by_training_type");
        DB::statement("
            CREATE VIEW vw_total_participant_by_training_type AS
            SELECT 
                c.param as training_type, 
                COUNT(b.training_type_id) as total
            FROM participants a
            JOIN trainings b ON a.training_id = b.id
            RIGHT JOIN params c ON b.training_type_id = c.id
            WHERE c.category_param = 'training_type'
            GROUP BY c.param
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
