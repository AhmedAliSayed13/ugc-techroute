<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for($i=0; $i<10; $i++) {
            User::create([
                'name' => $i.'-Hardik Savani',
                'email' => $i.'creator@gmail.com',
                'password' => bcrypt('123456789'),
                'phone' => '0111291224'.$i,
                'is_creator'=>1,
                'is_active'=>1,

            ]);
        }
    }
}
