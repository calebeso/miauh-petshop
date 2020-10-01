<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoryTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['description' => 'Alimentos']);
        Category::create(['description' => 'Brinquedos']);
        Category::create(['description' => 'Utilitários']);
    }
}
