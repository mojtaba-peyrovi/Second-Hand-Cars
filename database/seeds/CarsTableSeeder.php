<?php

use Illuminate\Database\Seeder;
use bheller\ImagesGenerator\ImagesGeneratorProvider;
class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));
        $faker->addProvider(new ImagesGeneratorProvider($faker));
        $faker->addProvider(new Faker\Provider\Youtube($faker));
        $image = $faker->imageGenerator();
        foreach(range(1,30) as $index)
        {
            DB::table('cars')->insert([
               'dealer_id' => $faker->numberBetween($min = 1, $max = 100),
               'image' => $faker->imageUrl($width = 300, $height = 180),
               'video' => $faker->youtubeEmbedCode(),
               'year' => $faker->year($max = 'now'),
               'make' => $faker->vehicleMake,
               'model' => $faker->vehicleModel,
               'trim' => $faker->word,
               'city' =>$faker->city,
               'long' => $faker->longitude($min = -180, $max = 180),
               'lat' => $faker->latitude($min = -90, $max = 90),
               'location' => $faker->stateAbbr,
               'color' => $faker->colorName,
               'mileage' => $faker->numberBetween($min = 1000, $max = 19000),
               'price' => $faker->numberBetween($min = 200000, $max = 10000000),
               'transmission' => $faker->randomElement(['Manual', 'Automatic', 'CVT']),
               'engine' => $faker->randomElement(['1200', '1500', '1800', '2000','2200','3000']),
               'desc' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
               'created_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-3 years'),
               'updated_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = 'now')

           ]);
        }

    }
}
