<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'SUPER ADMIN',
            'status' => 'ACTIVE'
        ]);
        DB::table('roles')->insert([
            'name' => 'ADMIN',
            'status' => 'ACTIVE'
        ]);
        DB::table('roles')->insert([
            'name' => 'CHASIER',
            'status' => 'ACTIVE'
        ]);
    }
}
