<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use CoreProc\WalletPlus\Models\WalletType;

class WalletTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name'=> 'محفظة منشي محتوي',
                'decimals'=>2,
            ],
            [
                'name'=> 'محفظة عميل',
                'decimals'=>2,
            ]

        ];

        foreach ($items as $item) {
            $walletType = WalletType::create([
                'name' => $item['name'],
                'decimals' => $item['decimals'], // Set how many decimal points your wallet accepts here. Defaults to 0.
            ]);
        }
    }
}
