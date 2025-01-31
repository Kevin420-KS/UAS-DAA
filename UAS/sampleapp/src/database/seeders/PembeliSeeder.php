<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PembeliSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pembelis')->insert([
            [
                'name' => 'Pembeli User',
                'email' => 'pembeli@pembeli.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
