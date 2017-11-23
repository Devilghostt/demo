<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Genero::class, function (Faker $faker) {
    return [
        'genero'=>$faker->randomElement($array = array('Masculino','Femenino'))
    ];
});
