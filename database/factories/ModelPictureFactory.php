<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ModelPicture;
use Faker\Generator as Faker;

$factory->define(ModelPicture::class, function (Faker $faker) {
    return [
        'clothe_models_id' =>\App\ClotheModel::all()->random()->id,
        'picture' => \Faker\Provider\Image::image(storage_path().'/app/public/img/clotheModels',200,200,'people',false)
    ];
});
