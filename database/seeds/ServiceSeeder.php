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

        Service::create([
            'title' => 'Banho com remédio',
            'start' => '2020-12-17 13:25:00',
            'end' => '2020-12-17 15:30:00',
            'color' => '#ffff',
            'description' => 'Banho com remédio', 
            'price' => 90.00
        ]); 
        
        Service::create([
            'title' => 'Tosa',
            'start' => '2020-12-17 17:00:00',
            'end' => '2020-12-18 15:30:00',
            'color' => '#ffff',
            'description' => 'Tosa', 
            'price' => 60.00
        ]);
    }
}
