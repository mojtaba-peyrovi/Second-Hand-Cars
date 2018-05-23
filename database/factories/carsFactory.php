<?php

use Faker\Generator as Faker;
use bheller\ImagesGenerator\ImagesGeneratorProvider;

$factory->define(App\Car::class, function (Faker $faker) {

$faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));
$faker->addProvider(new ImagesGeneratorProvider($faker));


// $image = $faker->imageGenerator();
//     return [
//         'dealer_id' => function() {
//             return factory('App\Dealer')->create()->id;
//         },
//         'image' => $faker->imageUrl($width = 640, $height = 480),
//         'year' => $faker->year($max = 'now'),
//         'make' => $faker->vehicleMake,
//         'model' =>$faker->vehicleModel,
//         'trim' => $faker->word,
//         'city' =>$faker->city,
//         'long' => $faker->longitude($min = -180, $max = 180),
//         'lat' => $faker->latitude($min = -90, $max = 90),
//         'location' => $faker->stateAbbr,
//         'color' => $faker->colorName,
//         'mileage' => $faker->numberBetween($min = 1000, $max = 19000),
//         'price' => $faker->numberBetween($min = 200000, $max = 10000000),
//         'transmission' => $faker->randomElement(['Manual', 'Automatic', 'CVT']),
//         'engine' => $faker->randomElement(['1200', '1500', '1800', '2000','2200','3000']),
//         'desc' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true)
//
//         ];
});
