<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSvpRoleGrants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svp_role_grants', function (Blueprint $table) {
            $table->increments('role_grant_id');
            $table->integer('role_id')->unsigned();
            $table->integer('grant_id')->unsigned();
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('svp_roles');
            $table->foreign('grant_id')->references('grant_id')->on('svp_grants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('svp_role_grants');
    }
}
