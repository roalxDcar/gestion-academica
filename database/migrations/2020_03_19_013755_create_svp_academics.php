<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpAcademics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_academics', function (Blueprint $table) {
            $table->increments('academic_id');

            $table->integer('student_id')->unsigned();
            $table->integer('gestion_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('tutor_id')->unsigned();

            $table->integer('assinged_subjet');
            $table->double('average',8,2);
            $table->integer('state')->default(1);
            $table->timestamps();


            $table->foreign('student_id')->references('student_id')->on('svp_students');
            $table->foreign('gestion_id')->references('gestion_id')->on('svp_gestions');
            $table->foreign('level_id')->references('level_id')->on('svp_levels');
            $table->foreign('tutor_id')->references('tutor_id')->on('svp_tutors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_academics');
    }
}
