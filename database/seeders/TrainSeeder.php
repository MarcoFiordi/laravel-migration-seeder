<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {

            $newTrain = new Train();

            $newTrain->company = $faker->company;

            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;

            $newTrain->departure_time = $faker->dateTimeBetween('-2 days', '+10 days');
            $newTrain->arrival_time = $faker->dateTimeBetween('+11 days', '+20 days');

            $newTrain->train_code = $faker->bothify('??-####');

            $newTrain->carriages = $faker->numberBetween(5, 20);

            $newTrain->is_on_time = $faker->boolean;
            $newTrain->is_cancelled = $faker->boolean;

            $newTrain->save();
        }
    }
}