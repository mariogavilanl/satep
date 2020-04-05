<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('nroSap');
            $table->string('rut');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string("email")->nullable();
            $table->string('cargo');
            $table->string('gerencia');
            $table->integer('agentes_id');
            $table->integer('semestre');
            $table->boolean('co')->nullable();
            $table->dateTime('fechaNacimiento');
            $table->timestamp('fechaCarga')->useCurrent = true;
            $table->char('sexo');
            $table->boolean("realizado")->default(false);
            $table->boolean("realizadoco")->default(false);
            $table->boolean("informadopaciente")->default(false);
            $table->integer("idEncuesta");
            $table->boolean("encuesta");
            $table->integer("idAntecedentes");
            $table->boolean("antecedentes");

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
        Schema::dropIfExists('cargas');
    }
}
