<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Connectionsldaps;

class TableldapConexionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     


        Connectionsldaps::create([
            'name'=>"test ldap online",
            'username'=>"cn=read-only-admin,dc=example,dc=com",
            'password'=>'password',
            'description'=>'sample',
            'port'=>"389",
            'server'=>"ldap.forumsys.com",
            'base_dn'=>'dc=example,dc=com'
        ]);

    
      //User::factory(14)->create();
    }
}
