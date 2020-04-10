<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Testimonial;
use Faker\Generator as Faker;

$factory->define(Testimonial::class, function (Faker $faker) {
    return [
        "name"=>$faker->name,
        "factoryName"=>$faker->name,
        "img"=>$faker->imageUrl,
        "text"=>$faker->text,
    ];
});
