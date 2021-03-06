<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['description' => 'admin']);
        Role::create(['description' => 'manager']);
        Role::create(['description' => 'user']);
    }
}