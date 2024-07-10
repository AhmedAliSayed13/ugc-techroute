<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoOptionDurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('id' => 1, 'price' => 0,'scenes' => 2, 'time' => 15, 'is_active' => 1),
            array('id' => 2, 'price' => 50,'scenes' => 4, 'time' => 30, 'is_active' => 1),
            array('id' => 3, 'price' => 70,'scenes' => 6, 'time' => 60, 'is_active' => 1),
        ];
        DB::table('video_option_durations')->insert($data);
    }
}
