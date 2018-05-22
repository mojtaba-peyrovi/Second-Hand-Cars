<?php

use Illuminate\Database\Seeder;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));
        foreach (range(1,150) as $index) {
            DB::table('dealers')->insert([
                'name' => $faker->companyName,
                'city' => $faker->city,
                'long' => $faker->longitude($min = -180, $max = 180),
                'lat' => $faker->latitude($min = -90, $max = 90),
                'location' => $faker->stateAbbr,
                'phone' =>$faker->tollFreePhoneNumber,
                'created_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = '-3 years'),
                'updated_at' => $faker->dateTimeBetween($startDate = '-4 years', $endDate = 'now')
            ]);
        }
    }
}
