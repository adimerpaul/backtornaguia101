<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contratista;
use Faker\Generator as Faker;

$factory->define(Contratista::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'telefono' => $faker->word,
        'celular' => $faker->word,
        'direccion' => $faker->word,
        'ci' => $faker->word,
        'fecha_socio' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
