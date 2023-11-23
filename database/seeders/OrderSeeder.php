<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "user_id" => 1,
                "date" => now(),
                "status" => "done",
                "payment_method" => "cash",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "user_id" => 1,
                "date" => now(),
                "status" => "done",
                "payment_method" => "cash",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "user_id" => 2,
                "date" => now(),
                "status" => "done",
                "payment_method" => "ovo",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];
        DB::table("orders")->insert($data);
    }
}
