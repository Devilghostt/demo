<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Horario::class, function (Faker $faker) {
    return [
        'fechaInicio'=>$faker->date('y-m-d'),
        'fechaFin'=>$faker->date('y-m-d'),
        'horaInicio'=>$faker->time('H:i:s'),
        'horaFin'=>$faker->time('H:i:s'),
        'numeroCupos'=>$faker->biasedNumberBetween(10),
        'cuposListaEspera'=>$faker->biasedNumberBetween(10),
        'instructor'=>$faker->name,





    ];
});
