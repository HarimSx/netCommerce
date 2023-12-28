<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Harim',
            'email' => 'Harim@example.com',
            'password' => bcrypt('password1'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Isui',
            'email' => 'isui@example.com',
            'password' => bcrypt('password2'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
