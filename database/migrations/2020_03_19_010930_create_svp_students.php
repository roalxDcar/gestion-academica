<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_students', function (Blueprint $table) {
            $table->increments('student_id');

            $table->integer('province_id')->unsigned();

            $table->string('rude');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('ci');
            $table->string('email')->unique();
            $table->integer('gender');
            $table->string('address');
            $table->integer('phone');
            $table->integer('mobil');
            $table->string('photo');
            $table->integer('day');
            $table->integer('month');
            $table->integer('year');
            $table->integer('state')->default(1);
            $table->timestamps();

            $table->foreign('province_id')->references('province_id')->on('svp_provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_students');
    }
}
