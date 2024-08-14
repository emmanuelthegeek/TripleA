<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Imported DB facade to properly call the DB class on line 17

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserted the role names inside the roles table
        DB::table('roles')->insert([
            ['role_name' => 'Admin'],
            ['role_name' => 'Manager'],
            ['role_name' => 'User'],
        ]);
    }
}
