<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'brand' => $faker->company,
        'picture' => \Faker\Provider\Image::image(storage_path().'/app/public/img/brands',200,200,'people',false)
    ];
});
