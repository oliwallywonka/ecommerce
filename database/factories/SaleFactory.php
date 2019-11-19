<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'customers_id' => \App\Customer::all()->random()->id,
        'sale_statuses' => \App\SaleSatus::all()->random()->id,
        'total_sale' => $faker->randomFloat(2,1,4)
    ];
});
