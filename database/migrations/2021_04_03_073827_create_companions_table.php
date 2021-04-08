<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_user_id');
            $table->foreignId('user_id');
            $table->string('no_ktp');
            $table->enum('status', ['lajang','menikah']);
            $table->enum('gender', ['laki-laki','perempuan']);
            $table->string('place_birth');
            $table->date('date_birth');
            $table->foreignId('religion_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->text('home_address');
            $table->foreignId('districts_city_id')->constrained('districts_cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number');
            $table->string('email');
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
        Schema::dropIfExists('companions');
    }
}
