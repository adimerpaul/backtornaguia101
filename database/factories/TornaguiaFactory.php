<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tornaguia;
use Faker\Generator as Faker;

$factory->define(Tornaguia::class, function (Faker $faker) {

    return [
        'id_empresa' => $faker->randomDigitNotNull,
        'yacimiento' => $faker->word,
        'destino' => $faker->word,
        'contratista' => $faker->word,
        'cantidad' => $faker->randomDigitNotNull,
        'minerales' => $faker->word,
        'id_municipio' => $faker->randomDigitNotNull,
        'tipo_manterial' => $faker->word,
        'id_transporte' => $faker->randomDigitNotNull,
        'id_conductor' => $faker->randomDigitNotNull,
        'autorizadopor' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
