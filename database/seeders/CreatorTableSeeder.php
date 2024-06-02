<?php

namespace Database\Seeders;

use App\Models\CreatorInfo;
use App\Models\User;
use Illuminate\Database\Seeder;

class CreatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => $i . '-Hardik Savani',
                'email' => $i . 'creator@gmail.com',
                'password' => bcrypt('123456789'),
                'phone' => '0111291224' . $i,
                'is_creator' => 1,
                'is_active' => 1,

            ]);
            CreatorInfo::create([
                'user_id' => $user->id,
                'country_id' => 1,
                'birthdate' => '2024-06-03',
                'gender' => 'ذكر',
            ]);
        }
    }
}
