<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->words(5, true);
            $newTrain->departure_station = $faker->words(5, true);
            $newTrain->arrival_station = $faker->words(5, true);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->ean8();
            $newTrain->carriages = $faker->numberBetween(1, 50);
            $newTrain->delay = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
       }
    }
}
