<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Platform;
class PlatformTableSeeder extends Seeder
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
            'id'=>1,
            'name'=>'instagram',
           ],
           [
            'id'=>2,
            'name'=>'twitter',
           ],
           [
            'id'=>3,
            'name'=>'SMS',
           ],
           [
            'id'=>4,
            'name'=>'Another',
           ],
        ];
     
        foreach ($items as $item) {
            Platform::create([
                'id'=>$item['id'],
                'name'=>$item['name'],
            ]);
        }
    }
}