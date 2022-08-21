<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Item::create([
                'name' => fake()->name(),
                'type' => fake()->word(),
                'price' => fake()->numberBetween(1000, 1000000),
                'description' => fake()->paragraph()
            ]);
        }
    }
}
