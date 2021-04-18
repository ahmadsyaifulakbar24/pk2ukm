<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalTrainingByProvince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_training_by_province");
        DB::statement("
            CREATE VIEW vw_total_training_by_province AS
            SELECT
                a.id,
                a.province, 
                COUNT(b.province_id) as total_training
            FROM
            provinces a
            LEFT JOIN trainings b ON a.id = b.province_id
            GROUP BY a.id
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
