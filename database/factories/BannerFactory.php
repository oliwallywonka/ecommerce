<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'banner' =>  \Faker\Provider\Image::image(storage_path().'/app/public/img/banners',200,200,'people',false)
    ];
});
