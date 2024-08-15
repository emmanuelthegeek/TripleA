<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Akinyemi Samson',
                'email' => 'samson.akinyemi@gmail.com',
                'password' => bcrypt('Admin@123'),
                'role_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Joel Okoro',
                'email' => 'joel.okoro@gmail.com',
                'password' => bcrypt('Admin@123'),
                'role_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Umar Danladi',
                'email' => 'umar.danladi@gmail.com',
                'password' => bcrypt('Admin@123'),
                'role_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
