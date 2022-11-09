<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('telefono',12)->nullable();;
            $table->string('celular',12)->nullable();
            $table->string('direccion',25)->nullable();
            $table->string('ci',12)->nullable();
            $table->date('fecha_socio')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_usuario')->nullable();

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
        Schema::dropIfExists('contratistas');
    }
}
