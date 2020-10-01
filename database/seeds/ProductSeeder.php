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

        $category1 = Category::where('id', '1')->first();
        $category2 = Category::where('id', '2')->first();
        $category3 = Category::where('id', '3')->first();

        $product1 = Product::create([
            'description' => 'Alimento para gato Premium',
            'price' => '77.00',
        ]);

        $product2 = Product::create([
            'description' => 'Alimento para cachorro',
            'price' => '57.00',
        ]);

        $product3 = Product::create([
            'description' => 'Casinha para gato',
            'price' => '770.00',
        ]); 

        $product1-> categories()->attach($category1);
        $product2-> categories()->attach($category2);
        $product3-> categories()->attach($category3);
        
    }
}
