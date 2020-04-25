<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpTutors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_tutors', function (Blueprint $table) {
            $table->increments('tutor_id');
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('ci')->unique();
            $table->string('email')->unique();
            $table->integer('gender');
            $table->integer('phone')->nullable();
            $table->integer('mobil');
            $table->integer('state')->default(1);
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
        Schema::dropIfExists('svp_tutors');
    }
}
