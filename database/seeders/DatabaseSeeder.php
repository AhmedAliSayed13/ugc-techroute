<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTableSeeder::class,
            AdminUserSeeder::class,
            ClientTableSeeder::class,
            CreatorTableSeeder::class,
            // EmirateTableSeeder::class,
            // MarketingServiceTypeTableSeeder::class,
            // CustomerTableSeeder::class,
            // PlatformTableSeeder::class,
            // PlatformAccountTableSeeder::class,
        ]);


    }
}
