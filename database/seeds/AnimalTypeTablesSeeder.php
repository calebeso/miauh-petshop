<?php

use Illuminate\Database\Seeder;
use App\Model\AnimalType;

class AnimalTypeTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnimalType::truncate();
        DB::table('animal_types')->truncate();

        AnimalType::create(['description' => 'cachorro']);
        AnimalType::create(['description' => 'gato']);
    }
}
