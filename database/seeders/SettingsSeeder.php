<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'id' => 1, 'key' => 'percentage_video_price', 'value' =>'50', 'tag' => 'payment'],

        ];
        DB::table('settings')->insert($data);
    }
}
