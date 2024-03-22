<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
			DB::table('orders')->insert([
				'order_ref' => 'REF' . ($i + 1),
				'customer_name' => 'Customer ' . ($i + 1),
				'created_at' => now(),
				'updated_at' => now(),
			]);
		}
    }
}
