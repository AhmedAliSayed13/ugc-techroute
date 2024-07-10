<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['id' => 1, 'name' => 'مرحلة الدفع '],
            ['id' => 2, 'name' => 'مرحلة تفاصيل المنتج'],
            ['id' => 3, 'name' => 'مرحلة معايير الفيديو'],
            ['id' => 4, 'name' => 'مراجعة الطلب'],
            ['id' => 5, 'name' => 'قيد التنفيذ'],
            ['id' => 6, 'name' => 'تم التنفيذ'],
        ];

        foreach ($statuses as $status) {
            OrderStatus::create($status);
        }
    }
}
