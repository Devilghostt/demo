<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\TipoCapacitacion::class, function (Faker $faker) {
    return [
        'Descripcion'=>$faker->text,
        'estado'=>$faker->randomElement($array = array('Activo','Inactivo')),
    ];
});
