<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Taget;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'id' => $faker->name,
      'user_id' => $faker->numberBetween($min = 10, $max = 99),
      'created_at' => $faker->email,
      'realText' => $faker->realText($maxNbChars = 50, $indexSize = 2),
    ];
});
