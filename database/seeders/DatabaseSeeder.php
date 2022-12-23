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
        // for ($i = 0; $i < 10; $i++){
        //     DB::table('author')->insert([
        //         'name' => $faker->name,
        //     ]);
        // }

        // // publisher table
        // for ($i = 0; $i < 10; $i++){
        //     DB::table('publisher')->insert([
        //         'name' => $faker->name,
        //     ]);
        // }

        // book table
        for ($i = 0; $i < 40; $i++){
            DB::table('book')->insert([
            'ISBN' => $faker->isbn13,
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
        }

    }
}
