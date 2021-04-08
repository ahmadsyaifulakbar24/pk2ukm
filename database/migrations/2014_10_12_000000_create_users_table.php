<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            // $table->string('email')->nullable()->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('province_id')->nullable()->unsigned();
            $table->bigInteger('districts_city_id')->nullable()->unsigned();
            $table->integer('order_province')->nullable();
            $table->integer('order_city')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            $table->bigInteger('role_id')->nullable()->unsigned();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
