<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('ciudad',25)->nullable();
            $table->string('departamento',12)->nullable();;
            $table->string('telefono',15)->nullable();
            $table->string('logo',30)->nullable();
            $table->string('nit',15)->nullable();
            $table->string('encabezado',50)->nullable();

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
        Schema::dropIfExists('empresas');
    }
}
