<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Persona::class, function (Faker $faker) {
    return [
        'primernombre'=>$faker->firstName,
        'segundonombre'=>$faker->firstName,
        'primerapellido'=>$faker->lastName,
        'segundoapellido'=>$faker->lastName,
        'direccion'=>$faker->address,
        'documento'=>$faker->biasedNumberBetween(10),
        'correo'=>$faker->safeEmail,
        'fechadenacimiento'=>$faker->date('y-m-d'),
        'telefono'=>$faker->biasedNumberBetween(10),
        'tipo_documentos_id'=>function (){
            return factory(App\Models\TipoDocumento::class)->create()->id;
        },
        'generos_id'=>function(){
            return factory(App\Models\Genero::class)->create()->id;
        },
        'users_id'=>function(){
            return factory(App\Models\User::class)->create()->id;
        },
        'afiliados_id'=>function (){
            return factory(App\Models\Afiliado::class)->create()->id;
        }







    ];
});
