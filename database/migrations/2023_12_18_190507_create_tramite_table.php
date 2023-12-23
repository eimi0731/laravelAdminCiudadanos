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
        Schema::create('tramite', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            $table->foreignId('id_unidad_administrativa')
            ->nullable()
            ->constrained('unidad_administrativa')
            ->cascadeOnDelete()
            ->nullOnDelete();

            $table->foreignId('id_personas')
            ->nullable()
            ->constrained('personas')
            ->cascadeOnDelete()
            ->nullOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite');
    }
};
