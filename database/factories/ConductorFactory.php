<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Conductor;
use Faker\Generator as Faker;

$factory->define(Conductor::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'contacto' => $faker->word,
        'telefono' => $faker->word,
        'celular' => $faker->word,
        'ciudad' => $faker->word,
        'direccion' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
