<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VideoOptionAspectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           array('id'=>1,'name'=>'Full portrait','describe'=>'Stories, Reels or Shorts for social media','is_active'=>1),
           array('id'=>2,'name'=>'Landscape','describe'=>'Display ads in Amazon, Youtube, Twitter','is_active'=>1)
        ];
        DB::table('video_option_aspects')->insert($data);
    }
}
