<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgedPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budged_performances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('budged');
            $table->bigInteger('budged_realization1');
            $table->bigInteger('document_budged_realization1');
            $table->bigInteger('budged_realization2');
            $table->bigInteger('document_budged_realization2');
            $table->integer('target_participant');
            $table->integer('participant_realization1');
            $table->integer('participant_realization2');
            $table->integer('target_companion');
            $table->integer('companion_realization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budged_performances');
    }
}
