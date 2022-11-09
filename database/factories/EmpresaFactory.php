<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'ciudad' => $faker->word,
        'departamento' => $faker->word,
        'telefono' => $faker->word,
        'logo' => $faker->word,
        'nit' => $faker->word,
        'encabezado' => $faker->word,
        'estado' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
