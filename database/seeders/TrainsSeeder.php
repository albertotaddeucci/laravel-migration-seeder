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
    public function run(): void
    {
        //
        $newTrain = new Train();

        $newTrain->company = "ciao";
        $newTrain->departure_station = "ehi";
        $newTrain->arrival_station = "arrivo";
        $newTrain->departure_time = "21:00:00";
        $newTrain->arrival_time = "22:00:00";
        $newTrain->departure_day = "2021-01-23";
        $newTrain->train_code = "sdv34dg34";
        $newTrain->n_coaches = 3;
        $newTrain->on_schedule = true;
        $newTrain->is_cancelled = false;


        $newTrain->save();
        // for($i = 0; $i < 100; $i++) {
        //     // creiamo un'istanza della classe film (nuova riga)

        // }

    }
}
