<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTornaguiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tornaguias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_empresa')->nullable();;
            $table->string('yacimiento',30)->nullable();
            $table->string('destino',25)->nullable();;
            $table->string('contratista',20)->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('minerales',20)->nullable();
            $table->integer('id_municipio')->nullable();
            $table->string('tipo_manterial',15)->nullable();
            $table->integer('id_transporte')->nullable();
            $table->integer('id_conductor')->nullable();
            $table->string('autorizadopor',15)->nullable();

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
        Schema::dropIfExists('tornaguias');
    }
}
