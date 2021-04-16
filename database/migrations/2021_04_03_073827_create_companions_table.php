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
            $table->foreignId('parent_user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('no_ktp')->nullable();
            $table->enum('status', ['lajang','menikah'])->nullable();
            $table->enum('gender', ['laki-laki','perempuan'])->nullable();
            $table->string('place_birth')->nullable();
            $table->date('date_birth')->nullable();
            $table->foreignId('religion_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('education_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->text('home_address')->nullable();
            $table->foreignId('districts_city_id')->nullable()->constrained('districts_cities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
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
