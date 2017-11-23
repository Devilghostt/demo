<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    static $password;
    return [
        'usuario'=>$faker->firstName,
        'password'=>$password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});
