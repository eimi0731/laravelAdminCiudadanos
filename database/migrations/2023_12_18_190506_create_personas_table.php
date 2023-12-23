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
            $table->date('fecha_nacimiento')->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->enum('sexo',['F' , 'M']);
            $table->enum('genero',['Mujer', 'Hombre','LGBTI']);
            $table->enum('grupo_sanguineo',['O+', 'O-','B+','B-', 'A-','A+','AB+', 'AB-']);
            $table->enum('etnia',['Afrodescendiente', 'Indigena','Mestizo','Otros_grupos',]);
            $table->enum('poblacion_especial',['Discapacidad', 'Red_Unidos','Victima','Ninguna']);
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
