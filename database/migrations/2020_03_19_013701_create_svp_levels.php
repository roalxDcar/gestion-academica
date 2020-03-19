<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_levels', function (Blueprint $table) {
            $table->increments('level_id');

            $table->integer('parallel_id')->unsigned();

            $table->string('description');
            $table->integer('limit');
            $table->integer('state')->default(1);
            $table->timestamps();


            $table->foreign('parallel_id')->references('parallel_id')->on('svp_parallels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_levels');
    }
}
