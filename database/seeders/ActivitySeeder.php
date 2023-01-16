<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            $activity = new Activity();
            $activity->name = $faker->sentence(2);
            $activity->address = $faker->address();
            $activity->img_cover = $faker->imageUrl(640, 480);
            $activity->slug = Str::slug($activity->name, '-');
            $activity->img = $faker->imageUrl(300, 300, 'animals');
            $activity->phone_number = $faker->ean13();
            $activity->email = $faker->email();
            $activity->website = $faker->freeEmail();
            $activity->save();
        }
    }
}
