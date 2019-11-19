<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clothe;
use Faker\Generator as Faker;

$factory->define(Clothe::class, function (Faker $faker) {
    return [
        'clothe_models_id' => \App\ClotheModel::all()->random()->id,
        'colors_id' => \App\Color::all()->random()->id,
        'sizes_id' => \App\Size::all()->random()->id
    ];
});
