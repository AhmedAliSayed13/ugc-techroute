<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MainOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'id' => 1, 'name' => 'أين تفضل تصوير الفيديو؟', 'is_active' => 1, 'created_at' => '2024-06-10 16:28:55', 'updated_at' => '2024-06-10 16:28:55' ],
            [ 'id' => 2, 'name' => 'ما نوع المحتوى الذي تحب إنشاءه أكثر؟', 'is_active' => 1, 'created_at' => '2024-06-10 16:29:58', 'updated_at' => '2024-06-10 16:29:58' ],
            [ 'id' => 3, 'name' => 'كم مرة تنشر محتوى جديد؟', 'is_active' => 1, 'created_at' => '2024-06-10 16:31:40', 'updated_at' => '2024-06-10 16:31:40' ],
            [ 'id' => 4, 'name' => 'ما الأدوات التي تستخدمها في تصوير الفيديو؟', 'is_active' => 1, 'created_at' => '2024-06-10 16:32:25', 'updated_at' => '2024-06-10 16:32:25' ],
            [ 'id' => 5, 'name' => 'ما هي مدة الفيديوهات التي تنشئها عادة؟', 'is_active' => 1, 'created_at' => '2024-06-10 16:34:20', 'updated_at' => '2024-06-10 16:34:20' ],
        ];
        DB::table('main_options')->insert($data);
    }
}
