<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrderLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
			DB::table('orders_lines')->insert([
                'order_id' => rand(1, 20),
                'qty' => rand(1, 10),
                'product_id' => rand(1, 20), 
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
