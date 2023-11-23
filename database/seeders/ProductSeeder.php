<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Jasmine Tea",
                "price" => 2000.00,
                "quantity" => 100,
                "description" => "Jasmine Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Vanilla Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Vanilla Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Mango Tea",
                "price" => 5000.00,
                "quantity" => 100,
                "description" => "Mango Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("products")->insert($data);
    }
}
