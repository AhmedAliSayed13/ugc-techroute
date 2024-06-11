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
           array('id'=>1,'name'=>'Included','time'=>15,'is_active'=>1),
           array('id'=>2,'name'=>'Included','time'=>30,'is_active'=>1),
           array('id'=>3,'name'=>'+$70 / each video','time'=>60,'is_active'=>1),
        ];
        DB::table('video_option_durations')->insert($data);
    }
}
