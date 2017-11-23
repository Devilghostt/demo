<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\TipoDocumento::class, function (Faker $faker) {
    return [
        'descripcion'=>$faker->randomElement($array = array('T.T','C.C','C.E','PAS')),

    ];
});
