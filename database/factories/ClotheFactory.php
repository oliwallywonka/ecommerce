<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clothe;
use Faker\Generator as Faker;

$factory->define(Clothe::class, function (Faker $faker) {
    return [
        'clothe_model_id' => \App\ClotheModel::all()->random()->id,
        'color_id' => \App\Color::all()->random()->id,
        'size_id' => \App\Size::all()->random()->id
    ];
});
