<?php

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
        $this->call(RolesTablesSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserTablesSeeder::class);
        $this->call(CategoryTablesSeeder::class);
        $this->call(ProductSeeder::class);
        
    }
}
