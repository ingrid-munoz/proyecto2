<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdiomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("idioma");
            $table->foreignId("idempleado")->references('id')->on('empleados')->cascadeOnDelete();
            // ------------------------------------------------------------------------------
            // CAMPOS TABLA IDIOMAS
            //$table->string("idioma");
            //$table->enum("idioma",["Español","Ingles","Rumano","Chino","Otro"])->default('Español');
            // Clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idiomas');
    }
}
