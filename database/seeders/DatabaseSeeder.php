<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // author table
        for ($i = 0; $i < 10; $i++){
            DB::table('author')->insert([
                'name' => $faker->name,
            ]);
        }

        // // publisher table
        for ($i = 0; $i < 10; $i++){
            DB::table('publisher')->insert([
                'name' => $faker->name,
            ]);
        }

        // book table
        // remember ISBN
        for ($i = 0; $i < 200; $i++){
            $ISBN = $faker->isbn13;
            DB::table('book')->insert([
            'ISBN' => $ISBN,
            'title' => $faker->name,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'img_link' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'language' => $faker->languageCode,
            'edition'=> $faker->biasedNumberBetween($min = 1, $max = 5),         
            'type_id' => $faker->biasedNumberBetween($min = 1, $max = 5),
            'auth_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
            'publisher_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
            'publication_date' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);

            // USE THE SAME ISBN TO INSERT INTO CATEGORY AND BOOKSTATS
            DB::table('bookstats')->insert([
                'ISBN' => $ISBN,
                'price' => $faker->biasedNumberBetween($min = 500, $max = 2000),
                'quantity'=>$faker->biasedNumberBetween($min = 1, $max = 100),
                'sold' => $faker->biasedNumberBetween($min = 1, $max = 100)
            ]);

            DB::table('category')->insert([
                'ISBN' => $ISBN,
                'cat_name' => $faker->randomElement(['romance', 'thriller', 'fantasy', 'YA', 'biology', 'chemistry', 'physics', 'tafseer', 'urdu novel'])
            ]);
        }

    }
}
