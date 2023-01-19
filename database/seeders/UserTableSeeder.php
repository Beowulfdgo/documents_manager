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
        $user1 = new User;
        $user1->name="Jose Antonio  Flores Lara";
        $user1->email="antonioflores30@hotmail.com";
        $user1->password=bcrypt("mio12345678");
        $user1->save();
    

    }
}
