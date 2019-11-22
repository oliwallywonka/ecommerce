<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClothePicture;
use Faker\Generator as Faker;

$factory->define(ClothePicture::class, function (Faker $faker) {
    return [
        'clothe_id' =>\App\Clothe::all()->random()->id,
        'picture' => \Faker\Provider\Image::image(storage_path().'/app/public/img/clothes',200,200,'people',false)

    ];
});
