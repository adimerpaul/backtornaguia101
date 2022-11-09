<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transporte;
use Faker\Generator as Faker;

$factory->define(Transporte::class, function (Faker $faker) {

    return [
        'tipo_transporte' => $faker->word,
        'marca' => $faker->word,
        'placa' => $faker->word,
        'color' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
