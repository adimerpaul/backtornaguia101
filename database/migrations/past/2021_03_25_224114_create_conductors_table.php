<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('contacto',40)->nullable();
            $table->string('telefono',12)->nullable();;
            $table->string('celular',12)->nullable();
            $table->string('ciudad',12);
            $table->string('direccion',25)->nullable();

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
        Schema::dropIfExists('conductors');
    }
}
