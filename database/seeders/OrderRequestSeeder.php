<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderRequest;
use App\Models\Order;
use App\Models\User;

class OrderRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all users who are creators and can send requests
        $creators = User::where('is_creator', 1)->get();

        foreach ($creators as $creator) {
            // Generate 5 unique order requests for each creator
            for ($i = 0; $i < 5; $i++) {
                $order = Order::where('status', '=',4)->inRandomOrder()->first(); // Get a random order

                // Create a new OrderRequest if the combination does not exist
                OrderRequest::updateOrCreate(
                    [
                        'order_id' => $order->id,
                        'creator_id' => $creator->id,
                    ],
                    [
                        'status' => rand(0, 1) == 1 ? true : false, // Adjust status as needed
                        'created_at' => now(), // Or use $faker->dateTimeThisYear() for random date
                    ]
                );
            }
        }
    }
}
