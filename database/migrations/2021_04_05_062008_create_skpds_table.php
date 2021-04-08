<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skpds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name_dinas');
            $table->string('nip_dinas');
            $table->string('phone_number_dinas');
            $table->string('name_responsible_person');
            $table->string('phone_number_responsible_person');
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
        Schema::dropIfExists('skpds');
    }
}
