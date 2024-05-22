<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
        //    'customer-list',
        //    'customer-create',
        //    'customer-edit',
        //    'customer-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
         //   'ad-type-list',
         //   'ad-type-create',
         //   'ad-type-edit',
         //   'ad-type-delete',
        //    'ad-list',
        //    'ad-create',
        //    'ad-edit',
        //    'ad-delete',
        //    'category-list',
        //    'category-create',
        //    'category-edit',
        //    'category-delete',
        //    'contract-type-list',
        //    'contract-type-create',
        //    'contract-type-edit',
        //    'contract-type-delete',
        //    'contract-list',
        //    'contract-create',
        //    'contract-edit',
        //    'contract-delete',
        //    'visitor-list',
        //    'visitor-create',
        //    'visitor-edit',
        //    'visitor-delete',

        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
