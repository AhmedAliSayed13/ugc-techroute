<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['id' => 1, 'name' => 'قيد التنفيذ'],
            ['id' => 2, 'name' => 'بانتظار موافقه العميل'],
            ['id' => 3, 'name' => 'مكتمل'],
            ['id' => 4, 'name' => 'طلب تعديل علي الفيديو'],
            ['id' => 5, 'name' => 'معلق'],
        ];

        foreach ($statuses as $status) {
            TaskStatus::create($status);
        }
    }
}
