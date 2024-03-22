<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . ($i + 1),
                'cost' => rand(10, 100), // Assuming random cost
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
