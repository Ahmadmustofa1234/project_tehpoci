<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt('admin123'),
                "role" => "admin",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "User",
                "email" => "user@gmail.com",
                "password" => bcrypt('user123'),
                "role" => "user",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "User2",
                "email" => "user2@gmail.com",
                "password" => bcrypt('user123'),
                "role" => "user",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                'name' => 'Khaliq',
                'email' => 'gebrelhaliq0507@gmail.com',
                'password' => bcrypt('Pokemon123'),
                'role' => 'user',
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table("users")->insert($user);
    }
}
