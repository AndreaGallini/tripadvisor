<?php

namespace Database\Seeders;

use App\Models\DishCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newDishCategory = new DishCategory;
            $newDishCategory->name = $faker->sentence(5);
            $newDishCategory->save();


        }
    }
}
