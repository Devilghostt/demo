<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Capacitacion::class, function (Faker $faker) {
    return [
        'nombreCapacitacion'=>$faker->name,
        'descripcionCapacitacion'=>$faker->text,
        'duracion'=>$faker->time('H:i:s'),
        'imagenCapacitacion'=>$faker,
        'URLubicacion'=>$faker->streetAddress,
        'tipo_capacitacions_id'=>function(){
            return factory(App\Models\TipoCapacitacion::class)->create()->id;
        },
        'estado_capacitacions_id'=> function(){
            return factory(App\Models\EstadoCapacitacion::class)->create()->id;
        },
        'usuarios_id'=> function(){
            return factory(App\Models\Usuario::class)->create()->id;
        },





    ];
});
