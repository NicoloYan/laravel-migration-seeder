<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i = 20; $i++) {
            $new_trip = new Trip();
            $new_trip->destination = $faker->city();
            $new_trip->duration = rand(7, 14);
            $new_trip->price = $faker->randomFloat(2, 100, 2000);
            $new_trip->is_available = rand(0,1);
            $new_trip->description = $faker->paragraph(7, true);
            $new_trip->save();
        }
    }
}
