<?php

use Faker\Generator as Faker;

$factory->define(App\Dealer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'long' => $faker->longitude($min = -180, $max = 180),
        'lat' => $faker->latitude($min = -90, $max = 90),
        'location' => $faker->stateAbbr,
        'phone' =>$faker->tollFreePhoneNumber
    ];
});
