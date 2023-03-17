<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // $departments_id= 1; 

        /*$user1 = new User;
        $user1->name="Jose Antonio  Flores Lara";
        $user1->email="antonioflores30@hotmail.com";
        $user1->password=bcrypt("password");
        $user1->ldap=(1);
        $user1->guid="einstein";
        $user1->departments_id=1;
        $user1->save();

        $user1 = new User;
        $user1->name="Jose Armando";
        $user1->email="antonioflores30@gmail.com";
        $user1->password=bcrypt("mio12345678");
        $user1->ldap=(0);
        $user1->guid="newton";
        $user1->departments_id=3;
        $user1->save();*/

        User::create([
            'name'=>"Jose Armando",
            'email'=>"antonioflores30@gmail.com",
            'password'=>bcrypt("password"),
            'ldap'=>1,
            'guid'=>"newton",
            'user'=>"newton",
            'departments_id'=>3
        ])->assignRole('Filer');

        User::create([
            'name'=>"Veronica Rebeca",
            'email'=>"antonioflores30@yahoo.com",
            'password'=>bcrypt("password"),
            'ldap'=>0,
            'user'=>"einstein",
            'guid'=>"einstein",
            'departments_id'=>2
        ])->assignRole('Filer');

        User::create([
            'name'=>"Jose Antonio Flores Lara",
            'email'=>"antonioflores30@hotmail.com",
            'password'=>bcrypt("password"),
            'ldap'=>0,
            'guid'=>"einstein",
            'user'=>"einstein",
            'departments_id'=>1
        ])->assignRole('Admin');
    
      //User::factory(14)->create();
    }
}
