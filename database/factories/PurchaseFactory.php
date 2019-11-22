<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'employee_id' =>\App\Employee::all()->random()->id,
        'wholeseller_id' =>\App\Wholeseller::all()->random()->id,
        'travel_id' =>\App\Travel::all()->random()->id,
        'total_cost' => $faker->randomFloat(2,1,5)
    ];
});
