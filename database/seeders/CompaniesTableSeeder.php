<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'Netcommerce',
            'email' => 'netcommerce@example.com',
            'address' => '123 first street',
            'phone' => '123-456-7890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('companies')->insert([
            'name' => 'Netcommerce',
            'email' => 'netcommerce1@example.com',
            'address' => '456 Second street',
            'phone' => '987-654-3210',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('companies')->insert([
            'name' => 'Netcommerce',
            'email' => 'netcommerce2@example.com',
            'address' => '456 Second street',
            'phone' => '987-654-3210',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
