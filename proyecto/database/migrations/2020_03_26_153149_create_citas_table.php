<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('paciente_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->string('fecha');
            $table->string('hora');
            $table->string('especialidad');
            $table->string('estado');
            
            $table->timestamps();

            
            //relaciones
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('doctor_id')->references('id')->on('doctores');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
