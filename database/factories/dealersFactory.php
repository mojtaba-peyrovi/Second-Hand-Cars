<?php

use Faker\Generator as Faker;


$factory->define(App\Dealer::class, function (Faker $faker) {

$faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));
    // return [
    //     'name' => $faker->companyName,
    //     'city' => $faker->city,
    //     'long' => $faker->longitude($min = -180, $max = 180),
    //     'lat' => $faker->latitude($min = -90, $max = 90),
    //     'location' => $faker->stateAbbr,
    //     'phone' =>$faker->tollFreePhoneNumber,
    //     'website' =>$faker->domainName,
    //     'address' => $faker->streetAddress,
    //     'email' =>$faker->email,
    //     'contact_person' =>$faker->name,
    //     'job_title' =>$faker->jobTitle,
    //     'created_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-3 years'),
    //     'updated_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = 'now')
    // ];
});
