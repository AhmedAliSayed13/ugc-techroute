<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\MarketingServiceType;
class MarketingServiceTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
           'تو عام',
           'تو صور',
           'تو لوجو',
           'نو اعلانات',
           'تو ابوظبي',
           'تو دبي',
           'تو الشارقة',
           'تو نس',
           'نس العام',
           'نس امج',
           'نس الإعلانات',
           'نس ابوظبي',
           'نس دبي',
           'نس الشارقة',
           'تليجرام',
           'سناب شات',
           'بريسكوب',
           'تو طرق',
           'بنر'
        ];
     
        foreach ($items as $item) {
            MarketingServiceType::create(['name' => $item]);
        }
    }
}