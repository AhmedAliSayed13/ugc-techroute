<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaskStatus;

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
            ['id'=>1,'name' => 'قيد الانتظار'],
            ['id'=>2,'name' => 'قيد التنفيذ'],
            ['id'=>3,'name' => 'بانتظار الموافقه'],
            ['id'=>4,'name' => 'مكتمل'],
            ['id'=>5,'name' => 'معلق'],
        ];

        foreach ($statuses as $status) {
            TaskStatus::create($status);
        }
    }
}
