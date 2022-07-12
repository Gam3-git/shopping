<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// way 2 use facrory file
use App\Models\Product;

// way 1 use seeder file
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Str;
// use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // way 2 use facrory file
        Product::factory(200)->create();

        // way 1 use seeder file
        // $faker = Faker::create();
        // foreach ( range (1,200) as $value {
        //     DB::table('products')->insert([
        //         'name' => $faker->name(),
        //         'price' => $faker->biasedNumberBetween(200,5000),
        //         'category_id' => $faker->biasedNumberBetween(1,3),
        //         'created_at' => $faker->dateTime($max = 'now'),
        //         'updated_at' => $faker->dateTime($max = 'now')
        //         ])
        // });
        }
    }
