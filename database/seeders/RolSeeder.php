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

        $permission = Permission::create(['name' => 'department.index'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'department.create'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'department.edit'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'department.destroy'])->syncRoles($role1);

        $permission = Permission::create(['name' => 'companies.index'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'companies.create'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'companies.edit'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'companies.destroy'])->syncRoles($role1);

        $permission = Permission::create(['name' => 'connections-ldap.index'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'connections-ldap.create'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'connections-ldap.edit'])->syncRoles($role1);
        $permission = Permission::create(['name' => 'connections-ldap.destroy'])->syncRoles($role1);

        $permission = Permission::create(['name' => 'register'])->syncRoles($role1);

        //dashboard uploadfile
        $permission = Permission::create(['name' => 'dashboard'])->syncRoles($role2);
        

        //profile
        $permission = Permission::create(['name' => 'profile.edit'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'profile.update'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'profile.destroy'])->syncRoles([$role1]);



    }
}
