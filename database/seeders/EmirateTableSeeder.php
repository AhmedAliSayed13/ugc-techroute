<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Emirate;
  
class EmirateTableSeeder extends Seeder
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
            'id'=>10,
            'name'=>'أبو ظبي',
          ] ,
          [
            'id'=>11,
            'name'=>'دبي',
          ] ,
          [
            'id'=>12,
            'name'=>'الشارقة',
          ] ,
          [
            'id'=>13,
            'name'=>"إمارة عجمان",
          ] ,
          [
            'id'=>14,
            'name'=>"إمارة أم القيوين",
          ] ,
          [
            'id'=>15,
            'name'=>"إمارة رأس الخيمة",
          ] ,
          [
            'id'=>16,
            'name'=>"إمارة الفجيرة",
          ] 
           
        ];
     
        foreach ($items as $item) {
            Emirate::create([
                'id' => $item['id'],
                'name' => $item['name'],
            ]);
        }
    }
}