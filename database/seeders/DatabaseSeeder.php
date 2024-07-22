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
            WalletTypeSeeder::class,
            CountryTableSeeder::class,
            MainOptionsSeeder::class,
            ValueOptionsSeeder::class,
            PermissionTableSeeder::class,
            AdminUserSeeder::class,
            VideoOptionAspectsSeeder::class,
            VideoOptionDurationsSeeder::class,
            VideoOptionTypesSeeder::class,
            OrderStatusSeeder::class,
            TestDataSeeder::class,
            ClientTableSeeder::class,
            CreatorTableSeeder::class,
            SettingsSeeder::class,
            OrderSeeder::class,
            OrderVideoOptionSeeder::class,
            OrderRequestSeeder::class,
            WhitelistSeeder::class,
            TaskStatusSeeder::class,
        ]);


    }
}
