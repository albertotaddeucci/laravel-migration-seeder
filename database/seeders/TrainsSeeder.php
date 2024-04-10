<?php

namespace Database\Seeders;


use App\Models\Train;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //        

        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->streetName();
            $newTrain->arrival_station = $faker->streetName();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->departure_day = $faker->date();
            $newTrain->train_code = $faker->bothify('?????-#####');
            $newTrain->n_coaches = $faker->randomDigit();
            $newTrain->on_schedule = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}
