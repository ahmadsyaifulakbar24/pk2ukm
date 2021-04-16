<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalByBusinessStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_participant_by_business_status");
        DB::statement("
            CREATE VIEW vw_total_participant_by_business_status AS
            SELECT 
                a.param as business_status, 
                COUNT(business_status_id) as total
            FROM params a
            LEFT JOIN participants b ON a.id = b.business_status_id
            WHERE a.category_param = 'business_status'
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
