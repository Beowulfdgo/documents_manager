<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departments;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $department1 = new Departments;
        $department1->name="Seguridad";
        $department1->save();
        $department2 = new Departments;
        $department2->name="Mina";
        $department2->save();
        $department3 = new Departments;
        $department3->name="Planta";
        $department3->save();
        $department4 = new Departments;
        $department4->name="Mantenimiento";
        $department4->save();
    }
}
