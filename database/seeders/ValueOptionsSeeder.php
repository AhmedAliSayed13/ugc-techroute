<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValueOptionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [ 'id' => 1, 'name' => 'المنزل', 'main_option_id' => 1, 'is_active' => 1, 'created_at' => '2024-06-10 16:29:09', 'updated_at' => '2024-06-10 16:29:09' ],
            [ 'id' => 2, 'name' => 'السيارة', 'main_option_id' => 1, 'is_active' => 1, 'created_at' => '2024-06-10 16:29:18', 'updated_at' => '2024-06-10 16:29:18' ],
            [ 'id' => 3, 'name' => 'على الشاطئ', 'main_option_id' => 1, 'is_active' => 1, 'created_at' => '2024-06-10 16:29:27', 'updated_at' => '2024-06-10 16:29:27' ],
            [ 'id' => 4, 'name' => 'في الطائرة', 'main_option_id' => 1, 'is_active' => 1, 'created_at' => '2024-06-10 16:29:40', 'updated_at' => '2024-06-10 16:29:40' ],
            [ 'id' => 5, 'name' => 'المدونات (Vlogs)', 'main_option_id' => 2, 'is_active' => 1, 'created_at' => '2024-06-10 16:30:59', 'updated_at' => '2024-06-10 16:30:59' ],
            [ 'id' => 6, 'name' => 'مقاطع تعليمية', 'main_option_id' => 2, 'is_active' => 1, 'created_at' => '2024-06-10 16:31:08', 'updated_at' => '2024-06-10 16:31:08' ],
            [ 'id' => 7, 'name' => 'تحديات ومقالب', 'main_option_id' => 2, 'is_active' => 1, 'created_at' => '2024-06-10 16:31:17', 'updated_at' => '2024-06-10 16:31:17' ],
            [ 'id' => 8, 'name' => 'مراجعات للمنتجات', 'main_option_id' => 2, 'is_active' => 1, 'created_at' => '2024-06-10 16:31:27', 'updated_at' => '2024-06-10 16:31:27' ],
            [ 'id' => 9, 'name' => 'يوميًا', 'main_option_id' => 3, 'is_active' => 1, 'created_at' => '2024-06-10 16:31:53', 'updated_at' => '2024-06-10 16:31:53' ],
            [ 'id' => 10, 'name' => 'أسبوعيًا', 'main_option_id' => 3, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:02', 'updated_at' => '2024-06-10 16:32:02' ],
            [ 'id' => 11, 'name' => 'شهريًا', 'main_option_id' => 3, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:11', 'updated_at' => '2024-06-10 16:32:11' ],
            [ 'id' => 12, 'name' => 'سنوي', 'main_option_id' => 3, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:11', 'updated_at' => '2024-06-10 16:32:11' ],
            [ 'id' => 13, 'name' => 'هاتف ذكي', 'main_option_id' => 4, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:37', 'updated_at' => '2024-06-10 16:32:37' ],
            [ 'id' => 14, 'name' => 'كاميرا احترافية', 'main_option_id' => 4, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:46', 'updated_at' => '2024-06-10 16:32:46' ],
            [ 'id' => 15, 'name' => 'كاميرا ويب', 'main_option_id' => 4, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:55', 'updated_at' => '2024-06-10 16:32:55' ],
            [ 'id' => 16, 'name' => 'كاميرا موبيل', 'main_option_id' => 4, 'is_active' => 1, 'created_at' => '2024-06-10 16:32:55', 'updated_at' => '2024-06-10 16:32:55' ],
            [ 'id' => 17, 'name' => '1-5 دقائق', 'main_option_id' => 5, 'is_active' => 1, 'created_at' => '2024-06-10 16:34:33', 'updated_at' => '2024-06-10 16:34:33' ],
            [ 'id' => 18, 'name' => '5-10 دقائق', 'main_option_id' => 5, 'is_active' => 1, 'created_at' => '2024-06-10 16:35:01', 'updated_at' => '2024-06-10 16:35:01' ],
            [ 'id' => 19, 'name' => 'أكثر من 10 دقائق', 'main_option_id' => 5, 'is_active' => 1, 'created_at' => '2024-06-10 16:35:11', 'updated_at' => '2024-06-10 16:35:11' ],
            [ 'id' => 20, 'name' => 'أكثر من 30 دقائق', 'main_option_id' => 5, 'is_active' => 1, 'created_at' => '2024-06-10 16:35:11', 'updated_at' => '2024-06-10 16:35:11' ],
        ];

        DB::table('value_options')->insert($data);
    }
}
