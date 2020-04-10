<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        "serviceTitle"=>$faker->name,
        "sDescription"=>$faker->text,
    ];
});
