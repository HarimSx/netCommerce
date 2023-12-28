<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'name' => 'install nominatim in serv',
            'description' => 'You must install Nominatim to use Nominatim reverse',
            'company_id' => 1,
            'user_id' => 1,
            'completed' => 0,
            'start_at' => now(),
            'expires_at' => NULL,
        ]);

        DB::table('tasks')->insert([
            'name' => 'Socket',
            'description' => 'Implement socket in the tracking view',
            'company_id' => 2,
            'user_id' => 2,
            'completed' => 1,
            'start_at' => now(),
            'expires_at' => now()->addDays(5),
        ]);
    }
}
