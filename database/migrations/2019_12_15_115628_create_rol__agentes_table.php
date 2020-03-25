<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolAgentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol__agentes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("roles_id");
            $table->foreign('roles_id')->references('id')->on('roles');

            $table->unsignedBigInteger("agentes_id");
            $table->foreign('agentes_id')->references('id')->on('agentes');

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
        Schema::dropIfExists('rol__agentes');
    }
}
