<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Articulo::class, function (Faker $faker) {
    return [
        'codigo'=>$faker->isbn10,
        'cantidad'=>$faker->biasedNumberBetween(5),
        'nombre'=>$faker->name,
        'observaciones'=>$faker->text,
        'tamano'=>$faker->text,
        'valoraArticulo'=>$faker->biasedNumberBetween(100),
        'estado'=>$faker->randomElement($array = array('Activo','Inactivo')),
        'PrecioUnitarioAlquiler'=>$faker->biasedNumberBetween(100000),
        'descripcion'=>$faker->text,
        'tipo_articulos_id'=>function (){
            return factory(App\Models\TipoArticulo::class)->create()->id;
        },




    ];
});
