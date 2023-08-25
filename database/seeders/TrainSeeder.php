<?php

namespace Database\Seeders;

use App\Models\train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_train = new Train();

        $new_train->agency_name = $faker->word();
        $new_train->departure_station = $faker->words(2, true);
        $new_train->arrival_station = $faker->words(2, true);
        $new_train->departure_time = $faker->time();
        $new_train->arrival_time = $faker->time();
        $new_train->train_code = $faker->randomNumber(5, true);
        $new_train->number_of_cabs = $faker->randomDigit();
        $new_train->in_time = $faker->boolean();
        $new_train->cancelled = $faker->boolean();

        $new_train->save();
    }
}
