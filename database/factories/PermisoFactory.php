<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->name,
        'slug' => $faker->name,
    ];
});
