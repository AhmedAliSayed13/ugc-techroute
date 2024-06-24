<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Whitelist;
use App\Models\Order; // Assuming you have an Order model
use App\Models\User; // Assuming you have a User model
use Faker\Factory as Faker;

class WhitelistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming you have existing orders and users to assign to whitelist entries
        $orders = Order::pluck('id')->toArray();
        $users = User::where('is_creator', 1)->pluck('id')->toArray();

        foreach (range(1, 100) as $index) { // Adjust the number as per your requirement
            // Generate unique order_id and creator_id for each whitelist entry
            $order_id = $faker->randomElement($orders);
            $creator_id = $faker->randomElement($users);

            // Check if the combination of order_id and creator_id already exists in Whitelist
            if (!Whitelist::where('order_id', $order_id)->where('creator_id', $creator_id)->exists()) {
                Whitelist::create([
                    'order_id' => $order_id,
                    'creator_id' => $creator_id,
                    'created_at' => now(), // Or use $faker->dateTimeThisYear() for random date
                ]);
            }
        }
    }
}
