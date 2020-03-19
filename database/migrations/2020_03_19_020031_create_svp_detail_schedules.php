<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpDetailSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_detail_schedules', function (Blueprint $table) {
            $table->increments('detail_schedule_id');

            $table->integer('detail_teacher_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('time_id')->unsigned();

            $table->timestamps();

            $table->foreign('detail_teacher_id')->references('detail_teacher_id')->on('svp_detail_teachers');
            $table->foreign('level_id')->references('level_id')->on('svp_levels');
            $table->foreign('time_id')->references('time_id')->on('svp_times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_detail_schedules');
    }
}
