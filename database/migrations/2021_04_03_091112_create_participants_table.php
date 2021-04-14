<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_id')->constrained('trainings')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->enum('gender', ['laki-laki','perempuan']);
            $table->foreignId('religion_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->string('id_number');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->foreignId('education_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number');
            $table->string('email');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('districts_city_id')->constrained('districts_cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('business_status_id')->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->string('profile_photo');

            $table->string('name_umkm')->nullable();
            $table->text('address_umkm')->nullable();
            $table->foreignId('business_sector_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_establishment_umkm')->nullable();
            $table->string('no_iumk')->nullable();
            $table->foreignId('position_umkm_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('business_turnover')->nullable();
            $table->integer('number_employees')->nullable();

            $table->string('name_koperasi')->nullable();
            $table->text('address_koperasi')->nullable();
            $table->foreignId('type_koperasi_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_establishment_koperasi')->nullable();
            $table->string('registrasion_number_koperasi')->nullable();
            $table->foreignId('position_koperasi_id')->nullable()->constrained('params')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('participants');
    }
}
