<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VideoOptionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           array('id'=>1,'name'=>'Video ad','price'=>99,'is_active'=>1),
           array('id'=>2,'name'=>'TikTok / Short / Reel','price'=>199,'is_active'=>1),
           array('id'=>3,'name'=>'Product showcase','price'=>159,'is_active'=>1),
           array('id'=>4,'name'=>'Honest review','price'=>79,'is_active'=>1),
        ];
        DB::table('video_option_types')->insert($data);
    }
}
