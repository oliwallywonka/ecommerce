<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'employees_id' =>\App\Employee::all()->random()->id,
        'wholesellers_id' =>\App\Wholeseller::all()->random()->id,
        'travels_id' =>\App\Travel::all()->random()->id,
        'total_cost' => $faker->randomFloat(2,1,5)
    ];
});
