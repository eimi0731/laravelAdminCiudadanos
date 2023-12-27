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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion')->nullable();
            $table->string('apellido1')->nullable();
            $table->string('apellido2')->nullable();
            $table->string('nombre1')->nullable();
            $table->string('nombre2')->nullable();
            $table->enum('sexo',['F','M'])->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('grupo_sanguineo')->nullable();
            $table->enum('genero',['Mujer','Hombre','LGBTI'])->nullable();            
            $table->enum('etnia',['Afrodescendiente','Indigena','Mestizo','Otros_grupos',])->nullable();
            $table->enum('poblacion_especial',['Red_unidos','Discapacidad','Victimas','Ninguno',])->nullable();
            $table->string('telefono')->nullable();
            $table->string('entidad')->nullable();
            $table->string('direccion')->nullable();
            $table->timestamps();
           
            //foraneas
        


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
