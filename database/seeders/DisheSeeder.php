<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dishe;

use Faker\Generator as Faker;


class DisheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $dish = new Dishe();

            $dish->name = $faker->sentence(2);
            $dish->img = $faker->image(null, 640, 480);
            $dish->price = $faker->numberBetween(0, 100);
            $dish->description = $faker->sentence(10);
            $dish->save();
        }
    }
}
