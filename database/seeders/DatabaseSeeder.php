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
            CountryTableSeeder::class,
            MainOptionsSeeder::class,
            ValueOptionsSeeder::class,
            TestDataSeeder::class,
            PermissionTableSeeder::class,
            AdminUserSeeder::class,
            ClientTableSeeder::class,
            CreatorTableSeeder::class,
            VideoOptionAspectsSeeder::class,
            VideoOptionDurationsSeeder::class,
            VideoOptionTypesSeeder::class,
            SettingsSeeder::class,
            OrderStatusSeeder::class,
            OrderSeeder::class,
            OrderVideoOptionSeeder::class,
            OrderRequestSeeder::class,
            WhitelistSeeder::class,
            TaskStatusSeeder::class,
        ]);


    }
}
