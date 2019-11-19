<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'slide' =>  \Faker\Provider\Image::image(storage_path().'/app/public/img/slides',200,200,'people',false)
    ];
});
