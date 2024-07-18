<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {
            Order::create([
                // 'id'=> $i,
                'key' => $faker->uuid,
                'user_id' => $faker->numberBetween(1, 10),
                'video_option_type_id' => $faker->numberBetween(1, 4),
                'video_option_duration_id' => $faker->numberBetween(1, 3),
                'video_option_aspect_id' => $faker->numberBetween(1, 2),
                'video_count' => $faker->numberBetween(1, 5),
                'video_price' => $faker->randomFloat(2, 10, 100),
                'country_id' => $faker->numberBetween(1, 22),
                'gender' => $faker->randomElement(['ذكر', 'انثي']),
                'total' => $faker->randomFloat(2, 20, 500),
                'paid' => $faker->boolean,
                'status' => $faker->numberBetween(1, 5),
                'product_name' => $faker->sentence,
                'product_link' => $faker->url,
                'product_instructions' => $faker->sentence,
                'product_description' => $faker->paragraph,
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
