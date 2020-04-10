<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Intro;
use Faker\Generator as Faker;

$factory->define(Intro::class, function (Faker $faker) {
    return [
        "imageName"=>$faker->name,
        "img_path"=>$faker->imageUrl,

    ];
});
