<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([
            'name' => 'Hardik Savani',
            'email' => 'admin@gmail.com',
            // 'is_admin' => 1,
            'password' => bcrypt('123456789'),
        ]);

        $role = Role::create(['name' => 'admin','guard_name' => 'admin']);

        $permissions = Permission::pluck('name')->all();

        $role->syncPermissions($permissions);

        Admin::find(1)->assignRole('admin');
    }
}
