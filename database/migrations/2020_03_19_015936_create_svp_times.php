<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_times', function (Blueprint $table) {
            $table->increments('time_id');

            $table->integer('day_id')->unsigned();
            $table->integer('hour_id')->unsigned();

            $table->timestamps();

            $table->foreign('day_id')->references('day_id')->on('svp_days');
            $table->foreign('hour_id')->references('hour_id')->on('svp_hours');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_times');
    }
}
