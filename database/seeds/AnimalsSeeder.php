<?php

use Illuminate\Database\Seeder;
use App\Model\Animal;

class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::truncate();

        Animal::create([
            'name' => 'Bentinho',
            'animal_type' => 'Felino',
            'costumer_id' => 3
        ]);
    }
}
