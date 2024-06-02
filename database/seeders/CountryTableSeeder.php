<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'مصر', 'code' => 'EG'],
            ['id' => 2, 'name' => 'المملكة العربية السعودية', 'code' => 'SA'],
            ['id' => 3, 'name' => 'الإمارات العربية المتحدة', 'code' => 'AE'],
            ['id' => 4, 'name' => 'الكويت', 'code' => 'KW'],
            ['id' => 5, 'name' => 'قطر', 'code' => 'QA'],
            ['id' => 6, 'name' => 'البحرين', 'code' => 'BH'],
            ['id' => 7, 'name' => 'عمان', 'code' => 'OM'],
            ['id' => 8, 'name' => 'العراق', 'code' => 'IQ'],
            ['id' => 9, 'name' => 'سوريا', 'code' => 'SY'],
            ['id' => 10, 'name' => 'الأردن', 'code' => 'JO'],
            ['id' => 11, 'name' => 'لبنان', 'code' => 'LB'],
            ['id' => 12, 'name' => 'فلسطين', 'code' => 'PS'],
            ['id' => 13, 'name' => 'اليمن', 'code' => 'YE'],
            ['id' => 14, 'name' => 'ليبيا', 'code' => 'LY'],
            ['id' => 15, 'name' => 'السودان', 'code' => 'SD'],
            ['id' => 16, 'name' => 'الجزائر', 'code' => 'DZ'],
            ['id' => 17, 'name' => 'المغرب', 'code' => 'MA'],
            ['id' => 18, 'name' => 'تونس', 'code' => 'TN'],
            ['id' => 19, 'name' => 'موريتانيا', 'code' => 'MR'],
            ['id' => 20, 'name' => 'جيبوتي', 'code' => 'DJ'],
            ['id' => 21, 'name' => 'الصومال', 'code' => 'SO'],
            ['id' => 22, 'name' => 'جزر القمر', 'code' => 'KM'],
        ];

        foreach ($items as $item) {
            Country::create([
                'id' => $item['id'],
                'name' => $item['name'],
                'code' => $item['code'],
            ]);
        }
    }
}
