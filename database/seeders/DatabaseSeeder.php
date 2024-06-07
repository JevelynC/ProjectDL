<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Exercise1Seeder::class);
        $this->call(Exercise2Seeder::class);
        $this->call(Exercise3Seeder::class);
        $this->call(Exercise4Seeder::class);
    }
}
