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
        // Registered the RolesTableSeeder and UsersTableSeeder to automatically run the class when the db:seed command is called
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
