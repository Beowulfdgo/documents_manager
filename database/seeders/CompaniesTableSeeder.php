<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $companie1 = new Companies;
        $companie1->name="Peñoles";
        $companie1->description="Empresa publica";
        $companie1->file="logo.png";
        $companie1->status="true";
        $companie1->save();

    }
}
