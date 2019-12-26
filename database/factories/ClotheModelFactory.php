<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClotheModel;
use Faker\Generator as Faker;

$factory->define(ClotheModel::class, function (Faker $faker) {
    return [
        'category_id' =>\App\Category::all()->random()->id,
        'brand_id' => \App\Brand::all()->random()->id,
        'type_clothe_id' => \App\TypeClothe::all()->random()->id,
        'ref_price' => $faker->randomFloat(2,1,4),
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'weight' => $faker->randomNumber(4),
        'gender' => $faker->randomElement(['MASCULINO','FEMENINO','UNISEX']),
        'care_instructions' => $faker->paragraph

    ];
});
