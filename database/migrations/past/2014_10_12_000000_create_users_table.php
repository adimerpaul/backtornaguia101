<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipo_usuario',10)->nullable();
            $table->string('nombres',30)->nullable();
            $table->string('apellidos',30)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('celular',15)->nullable();
            $table->string('foto_perfil',30)->nullable();

            $table->integer('estado')->nullable();
            $table->integer('id_usuario')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
