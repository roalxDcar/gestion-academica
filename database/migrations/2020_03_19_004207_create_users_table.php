<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('province_id')->unsigned();
            $table->integer('civil_state_id')->unsigned();
            $table->integer('specialty_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('ci');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('attempts')->default(0);
            $table->dateTime('date_attempts')->nullable();
            $table->integer('gender');
            $table->string('address');
            $table->integer('phone');
            $table->integer('mobil');
            $table->string('photo');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->integer('service_years');
            $table->integer('state')->default(1);
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('province_id')->references('province_id')->on('svp_provinces');
            $table->foreign('civil_state_id')->references('civil_state_id')->on('svp_civil_states');
            $table->foreign('specialty_id')->references('specialty_id')->on('svp_specialties');
            $table->foreign('category_id')->references('category_id')->on('svp_categories');
            $table->foreign('role_id')->references('role_id')->on('svp_roles');
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
