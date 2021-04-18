<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TotalCompanionByProvince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP VIEW IF EXISTS vw_total_companion_by_province");
        DB::statement("
            CREATE VIEW vw_total_companion_by_province AS
            SELECT
                c.id,
                c.province,
                COUNT(b.province_id) as total_companion
            FROM 
            companions a
            LEFT JOIN users b ON a.parent_user_id = b.id
            RIGHT JOIN provinces c ON c.id = b.province_id
            GROUP BY c.id
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
