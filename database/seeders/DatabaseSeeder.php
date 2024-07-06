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
            CountryTableSeeder::class,
            ClientTableSeeder::class,
            CreatorTableSeeder::class,
            MainOptionsSeeder::class,
            ValueOptionsSeeder::class,
            VideoOptionAspectsSeeder::class,
            VideoOptionDurationsSeeder::class,
            VideoOptionTypesSeeder::class,
            SettingsSeeder::class,
            OrderSeeder::class,
            OrderVideoOptionSeeder::class,
            OrderRequestSeeder::class,
            WhitelistSeeder::class,
            TaskStatusSeeder::class,
        ]);


    }
}
