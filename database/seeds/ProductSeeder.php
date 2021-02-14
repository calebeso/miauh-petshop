<?php

use Illuminate\Database\Seeder;
use App\Model\Product;
use App\Model\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $product1 = Product::create([
            'description' => 'Alimento para gato Premium',
            'price' => '77.00',
            'category_id' => 1,
            'status' => 1, 
            'quantity' => 16
        ]);

        $product2 = Product::create([
            'description' => 'Alimento para cachorro',
            'price' => '57.00',
            'category_id' => 2,
            'status' => 1,
            'quantity' => 10
        ]);

        $product3 = Product::create([
            'description' => 'Casinha para gato',
            'price' => '770.00',
            'category_id' => 3,
            'status' => 0,
            'quantity' => 3
        ]); 
        
    }
}
