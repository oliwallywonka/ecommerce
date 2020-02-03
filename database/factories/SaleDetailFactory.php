<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SaleDetail;
use Faker\Generator as Faker;

$factory->define(SaleDetail::class, function (Faker $faker) {
    return [
        'clothe_id' => \App\Clothe::all()->random()->id,
        'sale_id' => \App\Sale::all()->random()->id,
        'sale_price' => $faker->randomFloat(2,1,4),
        'quantity' => 1
    ];
});
