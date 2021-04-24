<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(StoreSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
