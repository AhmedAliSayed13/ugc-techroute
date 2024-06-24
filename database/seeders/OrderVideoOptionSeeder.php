<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderVideoOption;
use App\Models\MainOption;
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

        for ($i = 1; $i <= 50; $i++) {
                $MainOptions=MainOption::all();
                foreach($MainOptions as $MainOption){
                    $valueOptions = [];
                    $values=$MainOption->valueOptions->pluck('id')->toArray();
                    $valueOptions = $faker->randomElements($values,2);

                    OrderVideoOption::create([
                        'main_option_id' => $MainOption->id,
                        'value_options' => implode(',', $valueOptions),
                        'order_id' => $i,
                        'created_at' => $faker->dateTimeThisYear,
                    ]);

            }
        }
    }
}
