<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerTableSeeder extends Seeder
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
            'key'=>35436456,
            'name'=>'ahmed mostafa',
            'short_url'=>'/',
            'start_license'=>'2023-05-03',
            'end_license'=>'2023-05-30',
            'description'=>'egrgrthkiosdsdl  we;kpokwer oow3o p3orip3',
            'emirate_id'=>10,
            'user_id'=>1,

           ]
        ];
     
        foreach ($items as $item) {
            Customer::create([
                'key'=>$item['key'],
                'name'=>$item['name'],
                'short_url'=>$item['short_url'],
                'start_license'=>$item['start_license'],
                'end_license'=>$item['end_license'],
                'description'=>$item['description'],
                'emirate_id'=>$item['emirate_id'],
                'user_id'=>$item['user_id'],
            ]);
        }
    }
}