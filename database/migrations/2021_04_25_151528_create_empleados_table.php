<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // CAMPOS DE LA TABLA EMPLEADO
            $table->string("nombre");
            $table->string("telefono");
            $table->string("direccion");
            $table->string("estudios"); //Un valor entre
            //$table->foreignId("ididioma")->references('id')->on('idiomas');
            // ----------------------------------------------------------------------------------
            //$table->enum("estudios",["Secundaria","Grado medio","Bachiller","Grado superior","Uni"])->default('Secundaria');
            // Clave foranea
            //$table->foreignId("ididioma")->references('id')->on('idiomas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
