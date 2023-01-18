<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //istanziare un oggetto del modello
        $new_train = new Train();
        $new_train->agency=
        $new_train->departure_staiton=
        $new_train->arrival_station=
        $new_train->departure_time=
        $new_train->arrival_time=
        $new_train->train_code=
        $new_train->number_of_carriages=
        $new_train->is_on_time=
        $new_train->is_deleted=




        //salva i record nel Db
        $new_train->save();

    }
}