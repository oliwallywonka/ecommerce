<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelOffert;
use Faker\Generator as Faker;

$factory->define(ModelOffert::class, function (Faker $faker) {
    return [
        'clothe_model_id' => \App\ClotheModel::all()->random()->id,
        'offert_porcent' => $faker->numberBetween(0,100),
        'offert_days' => $faker->numberBetween(0,100),
    ];
});
