<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ShowProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Kaos',
                'description' => 'Kaos',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'kaos.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Kemeja',
                'description' => 'Kemeja',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'kemeja.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Jaket',
                'description' => 'Jaket',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'jaket.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Celana',
                'description' => 'Celana',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'celana.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Sepatu',
                'description' => 'Sepatu',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'sepatu.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Tas',
                'description' => 'Tas',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'tas.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Topi',
                'description' => 'Topi',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'topi.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Dompet',
                'description' => 'Dompet',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'dompet.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
            [
                'title' => 'Jam Tangan',
                'description' => 'Jam  Tangan',
                'quantity' => '10',
                'price' => '100000',
                'discount_price' => '90000',
                'image' => 'jam.jpg',
                'created_at' => '2021-05-01 00:00:00',
                'updated_at' => '2021-05-01 00:00:00',
            ],
        ];

        DB::table('show_products')->insert($data);
    }
}
