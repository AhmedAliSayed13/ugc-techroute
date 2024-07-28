<?php

namespace Database\Seeders;

use App\Models\TransactionStatus;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['id' => 1, 'name' => 'قيد المراجعه'],
            ['id' => 2, 'name' => 'تم العملية بنجاح'],
            ['id' => 3, 'name' => 'تم الالغاء'],
        ];

        foreach ($statuses as $status) {
            TransactionStatus::create($status);
        }
    }
}
