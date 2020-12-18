<?php

use Illuminate\Database\Seeder;
use App\Model\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        Service::create([
            'title' => 'Banho com remédio',
            'start' => '2020-12-17 00:00:00',
            'end' => '2020-12-17 00:00:00',
            'color' => '#049372',
            'description' => 'Banho com remédio', 
            'price' => 90.00
        ]); 
        
        Service::create([
            'title' => 'Tosa',
            'start' => '2020-12-17 17:00:00',
            'end' => '2020-12-18 15:30:00',
            'color' => '#f89406',
            'description' => 'Tosa', 
            'price' => 60.00
        ]);
    }
}
