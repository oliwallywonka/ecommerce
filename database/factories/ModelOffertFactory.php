<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelOffert;
use Faker\Generator as Faker;

$factory->define(ModelOffert::class, function (Faker $faker) {
    return [
        'clothe_models_id' => \App\Clothe::all()->random()->id,
        'offert_porcent' => $faker->numberBetwen(0,100),
        'offert_days' => $faker->numberBetwen(0,100),
    ];
});
