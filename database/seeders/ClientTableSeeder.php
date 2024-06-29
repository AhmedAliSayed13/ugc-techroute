<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $i . '-Hardik Savani',
                'email' => $i . 'client@gmail.com',
                'password' => bcrypt('123456789'),
                'phone' => '01110000000'.$i,
                'is_creator' => 0,
                'is_active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),

            ]);
        }
    }
}
