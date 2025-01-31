<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Bakso Sapi', 'price' => 50000, 'stock' => 50],
            ['name' => 'Bakso Ayam', 'price' => 45000, 'stock' => 40],
            ['name' => 'Mie Basah', 'price' => 20000, 'stock' => 60],
            ['name' => 'Tahu Putih', 'price' => 15000, 'stock' => 70],
            ['name' => 'Tahu Kuning', 'price' => 18000, 'stock' => 50],
            ['name' => 'Tempe', 'price' => 12000, 'stock' => 80],
        ]);
    }
}
