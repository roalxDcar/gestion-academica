<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpDetailTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_detail_teachers', function (Blueprint $table) {
            $table->increments('detail_teacher_id');

            $table->integer('user_id')->unsigned();
            $table->integer('subjet_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('subjet_id')->references('subjet_id')->on('svp_subjets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_detail_teachers');
    }
}
