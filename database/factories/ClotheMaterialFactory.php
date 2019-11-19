<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClotheMaterial;
use Faker\Generator as Faker;

$factory->define(ClotheMaterial::class, function (Faker $faker) {
    return [
        'materials_id' =>\App\Category::all()->random()->id,
        'clothe_models_id' => \App\Brand::all()->random()->id,
        'porcent' => $faker->randomFloat(2,1,2)
    ];
});
