<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpDetailActivities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_detail_activities', function (Blueprint $table) {
            $table->increments('detail_activity_id');

            $table->integer('user_id')->unsigned();
            $table->integer('activity_id')->unsigned();

            $table->string('observation');
            $table->integer('state')->default(1);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('activity_id')->references('activity_id')->on('svp_activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_detail_activities');
    }
}
