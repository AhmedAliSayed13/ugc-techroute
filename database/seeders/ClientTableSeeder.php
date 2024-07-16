<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456789'),
                'phone' => $faker->phoneNumber,
                'is_creator' => 0,
                'is_active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),

            ]);
        }



    }
}
