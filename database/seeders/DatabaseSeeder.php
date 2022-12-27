<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeders\DateTime;

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
            $type = $faker->biasedNumberBetween($min = 1, $max = 5);
            // $created_at = $faker->dateTime($min = $pub_date, $max = 'now', $timezone = null);
            $ISBN = $faker->isbn13;
            DB::table('book')->insert([
            'ISBN' => $ISBN,
            'title' => $faker->name,
            'description' => $faker->sentence($nbWords = 100, $variableNbWords = true),
            // 'img_link' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'language' => $faker->languageCode,
            'edition'=> $faker->biasedNumberBetween($min = 1, $max = 5),         
            'type_id' => $type,
            'auth_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
            'publisher_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
            'publication_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

            // USE THE SAME ISBN TO INSERT INTO CATEGORY AND BOOKSTATS
            $quantity = $faker->biasedNumberBetween($min = 1, $max = 1000);
            $sold = $faker->biasedNumberBetween($min = 1, $max = $quantity);
            DB::table('bookstats')->insert([
                'ISBN' => $ISBN,
                'price' => $faker->biasedNumberBetween($min = 500, $max = 2000),
                'quantity'=> $quantity,
                'sold' => $sold
            ]);


            $category = "";
            if($type==1){
                $category = $faker->randomElement(['General Knowledge', 'Autobiography', 'Educative', 'Kids Book']);
            }else if($type==2){
                $category = $faker->randomElement(['History', 'Medical', 'Chemistry', 'Physics', 'Computing', 'Business and Accounting', 'Exam Preparation']);
            }else if($type==3){
                $category = $faker->randomElement(['Novel', 'Poetry', 'Literature']);
            }else if($type==4){
                $category = $faker->randomElement(['fiction', 'romance', 'thriller', 'mystery', 'classic']);
            }else if($type==4){
                $category = $faker->randomElement(['quran', 'hadith', 'tafseer', 'general', 'biography']);
            }
            DB::table('category')->insert([
                'ISBN' => $ISBN,
                'cat_name' => $category
            ]);
        }

        $states = [
            ['name' => 'Punjab'],
            ['name' => 'Khyper Pakhtun Khuwa'],
            ['name' => 'Balochistan'],
            ['name' => 'Sindh'],
            ['name' => 'FATA']
        ];

        $cities = [
            ['name' => 'Lahore'],
            ['name' => 'Faisalabad'],
            ['name' => 'Multan'],
            ['name' => 'Gujrat'],
            ['name' => 'Sargodha'],
            ['name' => 'Sialkot'],
            ['name' => 'Peshawer'],
            ['name' => 'Kohat'],
            ['name' => 'Abottabad'],
            ['name' => 'Nowshera'],
            ['name' => 'Chitral'],
            ['name' => 'Karachi'],
            ['name' => 'Jacobabad'],
            ['name' => 'Hyderabad'],
            ['name' => 'Sukkur'],
            ['name' => 'Quetta'],
            ['name' => 'Chaman'],
            ['name' => 'Gwadar'],
            ['name' => 'Turbat'],
            ['name' => 'FATA'],
        ];

        $types = [
            ['name'=> 'book'],
            ['name'=> 'educative'],
            ['name'=> 'urdu'],
            ['name'=> 'leisure'],
            ['name'=> 'islamic'],
        ];

        DB::table('state')->insert($states);
        DB::table('city')->insert($cities);
        DB::table('type')->insert($types);
    }
}
