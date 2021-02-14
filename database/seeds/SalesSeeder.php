<?php

use Illuminate\Database\Seeder;
use App\Model\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'product_id' => 2,
            'user_id' => 3,
            'service_id' => 1,
            'costumer_id' => 4, 
            'total' => 132
        ]);
        
    }
}
