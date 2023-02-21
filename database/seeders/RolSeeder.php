<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 =Role::create(['name'=>'Admin']);
        $role2 =Role::create(['name'=>'Filer']);

        $permission = Permission::create(['name' => 'department.index'])->assignRole($role1);
        $permission = Permission::create(['name' => 'department.create'])->assignRole($role1);
        $permission = Permission::create(['name' => 'department.edit'])->assignRole($role1);
        $permission = Permission::create(['name' => 'department.destroy'])->assignRole($role1);
        
        //dashboard uploadfile
        $permission = Permission::create(['name' => 'dashboard'])->assignRole($role2);
        

        //profile
        $permission = Permission::create(['name' => 'profile.edit'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'profile.update'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'profile.destroy'])->assignRole([$role1]);



    }
}
