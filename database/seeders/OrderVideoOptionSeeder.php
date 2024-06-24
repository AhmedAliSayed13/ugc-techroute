<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderVideoOption;
use Faker\Factory as Faker;

class OrderVideoOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $valueOptions = [];
            for ($j = 0; $j < $faker->numberBetween(2, 5); $j++) {
                $valueOptions[] = $faker->numberBetween(1, 17); // Assuming ID range is 1 to 100
            }
            OrderVideoOption::create([
                'main_option_id' => $faker->numberBetween(1, 5),
                'value_options' => implode(',', $valueOptions),
                'order_id' => $faker->numberBetween(1, 50),
                'created_at' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
