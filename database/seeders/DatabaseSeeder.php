<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::firstOrCreate(["name" => "Ismael Lima"], [
            'name' => 'Ismael Lima',
            'email' => 'ismael.lima@mesquita.rj.gov.br',
            'nivel' => 'ADMIN',
            'password' => 'teste123'
        ]);

        // \App\Models\User::firstOrCreate(["name" => "Ismael Lima"], [
        //     'name' => 'Ismael Lima',
        //     'email' => 'ismaeldsl89@gmail.com',
        //     'nivel' => 'Super-Admin',
        //     'password' => 'teste123'
        // ]);
    }
}
       