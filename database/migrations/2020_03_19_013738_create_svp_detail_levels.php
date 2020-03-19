<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpDetailLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_detail_levels', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('level_id')->unsigned();
            $table->integer('subjet_id')->unsigned();
            $table->integer('state')->default(1);

            $table->timestamps();


            $table->foreign('level_id')->references('level_id')->on('svp_levels');
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
        Schema::dropIfExists('svp_detail_levels');
    }
}
