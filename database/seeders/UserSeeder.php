<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin123@contoh.com',
                'password' => bcrypt('admin123'),
                'status' => 'admin',
            ],
            [
                'id' => '2',
                'name' => 'User1',
                'email' => 'user123@contoh.com',
                'password' => bcrypt('user1234'),
                'status' => 'pengguna',
            ],
            [
                'id' => '3',
                'name' => 'Erli',
                'email' => 'erli123@gmail.com',
                'password' => bcrypt('user1234'),
                'status' => 'pengguna',
            ],
            [
                'id' => '4',
                'name' => 'Yolanda',
                'email' => 'yolanda123@gmail.com',
                'password' => bcrypt('user1234'),
                'status' => 'pengguna',
            ],
            [
                'id' => '5',
                'name' => 'Paulus',
                'email' => 'paulus123@gmail.com',
                'password' => bcrypt('user1234'),
                'status' => 'pengguna',
            ],
        ]);
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
