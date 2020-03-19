<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_notes', function (Blueprint $table) {
            $table->increments('note_id');

            $table->integer('gestion_id')->unsigned();
            $table->integer('student_id')->unsigned();

            $table->string('description_subjet');
            $table->integer('bm1');
            $table->integer('bm2');
            $table->integer('bm3');
            $table->integer('bm4');
            $table->integer('trm1');
            $table->integer('trm2');
            $table->integer('trm3');
            $table->integer('note_final');
            $table->double('sequence_note',8,2);
            $table->integer('type_qualification');
            $table->integer('cod_subjet');
            $table->integer('cod_level');
            $table->text('observation');
            $table->integer('state')->default();
            $table->timestamps();

            $table->foreign('gestion_id')->references('gestion_id')->on('svp_gestions');
            $table->foreign('student_id')->references('student_id')->on('svp_students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_notes');
    }
}
