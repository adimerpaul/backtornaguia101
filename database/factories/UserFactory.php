<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'email_verified_at' => $faker->date('Y-m-d H:i:s'),
        'password' => $faker->word,
        'tipo_usuario' => $faker->word,
        'nombres' => $faker->word,
        'apellidos' => $faker->word,
        'fecha_nacimiento' => $faker->word,
        'telefono' => $faker->word,
        'celular' => $faker->word,
        'foto_perfil' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'remember_token' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
