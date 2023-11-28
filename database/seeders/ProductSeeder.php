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
                "name" => "Thai Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Thai Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Lemon Honey Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Lemon Honey Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Guava Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Guava Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Blackcurratn Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Blackcurratn Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Lychee Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Lychee Iced Tea",
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
            ],
            [
                "name" => "Apple Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Apple Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Cappucino Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Cappucino Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "Chocolate Iced Tea",
                "price" => 3000.00,
                "quantity" => 100,
                "description" => "Chocolate Iced Tea",
                "image" => "",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("products")->insert($data);
    }
}
