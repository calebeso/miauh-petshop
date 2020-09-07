<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Model\Role;
use App\Model\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('description', 'admin')->first();
        $managerRole = Role::where('description', 'manager')->first();
        $userRole = Role::where('description', 'user')->first();

        $admin = User::create([
            'full_name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), 
    
        ]);

        $manager = User::create([
            'full_name' => 'Gerente',
            'email' => 'gerente@gerente.com',
            'password' => Hash::make('password'),  
        ]);

        $user = User::create([
            'full_name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]); 

        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $user->roles()->attach($userRole);
    }
}
