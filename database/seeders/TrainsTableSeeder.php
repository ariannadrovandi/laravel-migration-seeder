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
            $newTrain->azienda = $faker->words(5, true);
            $newTrain->stazione_partenza = $faker->words(5, true);
            $newTrain->stazione_arrivo = $faker->words(5, true);
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice = $faker->ean8();
            $newTrain->vagoni = $faker->numberBetween(1, 50);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            // $newTrain->save();
       }
    }
}
