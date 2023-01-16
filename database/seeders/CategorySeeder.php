<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = ['hotel', 'restaurant', 'bar'];

        foreach($categories as $category){
            $newCategory = new Category;
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name, '-');
            $newCategory->save();
        }
    }
}
