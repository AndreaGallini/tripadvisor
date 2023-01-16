<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newreview = new Review;
            $newreview->title = $faker->sentence(5);
            $newreview->text_review = $faker->sentence(30);
            $newreview->vote = $faker->numberBetween(0, 5);
            $newreview->save();
        }
    }
}
