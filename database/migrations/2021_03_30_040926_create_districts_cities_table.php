<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('provinces');
            $table->string('districts_city');
            $table->integer('type');
            $table->string('state_capital');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts_cities');
    }
}
