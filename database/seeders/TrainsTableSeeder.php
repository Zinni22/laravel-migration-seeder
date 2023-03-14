<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model
use App\Models\Train;

//faker
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new Train;

        $newTrain->azienda = $faker->company() ;
        $newTrain->stazione_di_partenza = $faker->city();
        $newTrain->stazione_di_arrivo = $faker->city();
        $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1week', '+1week');
        $newTrain->orario_di_arrivo = $faker->dateTimeBetween('+1week', '+2weeks');
        $newTrain->codice_treno = $faker->bothify('######');
        $newTrain->numero_carrozze= $faker->numberBetween(2,17);
        $newTrain->on_time= $faker->boolean();
        $newTrain->cancellato= $faker->boolean();

        $newTrain->save();
    }
}
