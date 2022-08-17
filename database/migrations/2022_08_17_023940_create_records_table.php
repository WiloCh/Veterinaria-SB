<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->decimal('peso_paciente');
            $table->integer('edad_paciente');
            $table->date('fecha_visita');
            $table->date('fecha_vacuna');
            $table->integer('codigo_vacuna');
            $table->string('nombre_vacuna');
            $table->date('fecha_medicamento');
            $table->string('nombre_medicamento');
            $table->string('sintomas');
            $table->string('diagnostico');
            $table->string('examenes');
            $table->string('receta');
            $table->date('fecha_siguiente_visita');
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
        Schema::dropIfExists('records');
    }
};
