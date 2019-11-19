<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SaleDetail;
use Faker\Generator as Faker;

$factory->define(SaleDetail::class, function (Faker $faker) {
    return [
        'clothes_id' => \App\Clothe::all()->random()->id,
        'sales_id' => \App\Sale::all()->random()->id,
        'sale_price' => $faker->randomFloat(2,1,4)
    ];
});
