<?php

namespace Database\Seeders;

use App\Models\PlatformAccount;
use Illuminate\Database\Seeder;

class PlatformAccountTableSeeder extends Seeder
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
                'id' => 1,
                'name' => 'انستجرام العام',
                'username' => 'uae_barq',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'طلعة برق',
                'username' => 'talaat_barq',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'برق الطرق',
                'username' => 'barq_traffic',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'برق الخير',
                'username' => 'barq_khair',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'برق أبوظبي',
                'username' => 'ad_barq',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'برق دبي',
                'username' => 'dxb_barq',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'برق الشارقة',
                'username' => 'shj_barq',
                'group' => 'group1',
                'platform_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'برق عجمان',
                'username' => 'ajm_barq',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'برق أم القيوين',
                'username' => 'barquaq',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'برق رأس الخيمة',
                'username' => 'barqrak_',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 11,
                'name' => 'برق الفجيرة',
                'username' => 'barqfuj',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 12,
                'name' => 'بـرق الصـحـة',
                'username' => 'barqhealth',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 13,
                'name' => 'UAE_BARQ_EN',
                'username' => 'uae_barq_en',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 14,
                'name' => 'عاجل الإمارات 🇦🇪',
                'username' => 'uae_ajil',
                'group' => 'group2',
                'platform_id' => 1,
            ],
            [
                'id' => 15,
                'name' => 'برق الإمارات',
                'username' => 'UAE_BARQ',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 16,
                'name' => 'برق الطرق',
                'username' => 'barq_traffic',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 17,
                'name' => 'برق الخير',
                'username' => 'barq_khair',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 18,
                'name' => 'برق أبوظبي',
                'username' => 'ad_barq',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 19,
                'name' => 'برق دبي',
                'username' => 'DXB_BARQ',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 20,
                'name' => 'برق الشارقة',
                'username' => 'shj_barq',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 21,
                'name' => 'برق عجمان',
                'username' => 'ajm_barq',
                'group' => 'group1',
                'platform_id' => 2,
            ],
            [
                'id' => 22,
                'name' => 'برق أم القيوين',
                'username' => 'Barquaq',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 23,
                'name' => 'برق رأس الخيمة',
                'username' => 'barqrak_',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 24,
                'name' => 'برق الفجيرة',
                'username' => 'BarqFujv',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 25,
                'name' => 'برق الصحة',
                'username' => 'BARQHEALTH',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 26,
                'name' => 'UAE BARQ',
                'username' => 'UAE_BARQ_EN',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 27,
                'name' => 'عاجل الإمارات',
                'username' => 'uae_ajil',
                'group' => 'group2',
                'platform_id' => 2,
            ],
            [
                'id' => 28,
                'name' => 'العاجلة عربي',
                'username' => "1",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 29,
                'name' => 'من الإمارات عربي',
                'username' => "2",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 30,
                'name' => 'أبوظبي',
                'username' => "3",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 31,
                'name' => 'دبي',
                'username' => "4",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 32,
                'name' => 'الشارقة',
                'username' => "5",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 33,
                'name' => 'رياضة',
                'username' => "6",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 34,
                'name' => 'العاجلة إنجليزي',
                'username' => "9",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 35,
                'name' => 'من الإمارات إنجليزي',
                'username' => "10",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 36,
                'name' => 'تغذية',
                'username' => "501",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 37,
                'name' => 'سكري',
                'username' => "502",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 38,
                'name' => 'سرطان',
                'username' => "503",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 39,
                'name' => 'أطفال',
                'username' => "504",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 40,
                'name' => 'جنسية',
                'username' => "505",
                'group' => 'sms',
                'platform_id' => 3,
            ],
            [
                'id' => 41,
                'name' => 'تلغرام',
                'username' => "telegram",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 42,
                'name' => 'نبض',
                'username' => "nbd",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 43,
                'name' => 'تيك توك',
                'username' => "tiktok",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 44,
                'name' => 'يوتيوب',
                'username' => "youtube",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 45,
                'name' => 'سناب شات',
                'username' => "snapchat",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 46,
                'name' => 'برق كاست',
                'username' => "barq_cast",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 47,
                'name' => 'عميد الامارات Threats',
                'username' => "ameed_threats",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 48,
                'name' => 'شبكة ابوظبي Threats',
                'username' => "ad_threats",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 49,
                'name' => 'عميد الامارات',
                'username' => "ameed_uae",
                'group' => 'another',
                'platform_id' => 4,
            ],
            [
                'id' => 50,
                'name' => 'شبكة ابوظبي',
                'username' => "ad_uae",
                'group' => 'another',
                'platform_id' => 4,
            ],

        ];

        foreach ($items as $item) {
            PlatformAccount::create([
                'id' => $item['id'],
                'name' => $item['name'],
                'username' => $item['username'],
                'group' => $item['group'],
                'platform_id' => $item['platform_id'],
            ]);
        }
    }
}
