<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
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
                'name'=> 'Admin',
                'guard_name'=>'web',
            ],
            [
                'name'=> 'Marketing',
                'guard_name'=>'web',
            ],
            [
                'name'=> 'Editor',
                'guard_name'=>'web',
            ]
          
        ];
     
        foreach ($items as $item) {
            Role::create([
                'name' => $item['name'],
                'guard_name' => $item['guard_name'],
            ]);
        }
    }
}