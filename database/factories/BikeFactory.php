<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bike;
use Faker\Generator as Faker;

$factory->define(Bike::class, function (Faker $faker) {
    return [
        'marca'=>$faker->company,
        'modelo'=>$faker->name,
        'kms'=>rand(0,5000),
        'precio'=>$faker->randomFloat(2,1000,200000),
        'matriculada'=>$faker->boolean
    ];
});
