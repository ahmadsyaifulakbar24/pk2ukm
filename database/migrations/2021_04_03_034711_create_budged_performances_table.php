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
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('budged');
            $table->bigInteger('budged_realization1')->nullable();
            $table->text('document_budged_realization1')->nullable();
            $table->bigInteger('budged_realization2')->nullable();
            $table->text('document_budged_realization2')->nullable();
            $table->integer('target_participant');
            $table->integer('target_companion');
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
