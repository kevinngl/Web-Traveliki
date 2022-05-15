<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@traveliki.com',
            'password' => bcrypt('12345678'),
            'role' => 'Admin',
        ]);

        // User with role Siswa
        User::create([
            'nama' => 'User',
            'email' => 'user@traveliki.com',
            'password' => bcrypt('12345678'),
            'role' => 'User',
        ]);    
    }
}
