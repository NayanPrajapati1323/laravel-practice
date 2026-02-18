<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $mobileProducts = [
            'iPhone 15',
            'iPhone 14 Pro',
            'Samsung Galaxy S23',
            'Samsung Galaxy A54',
            'Xiaomi Redmi Note 13',
            'Xiaomi 13 Pro',
            'Vivo V29',
            'Vivo X90',
            'OnePlus 11',
            'Google Pixel 8',
            'Realme 11 Pro',
            'Oppo Reno 10',
            'Motorola Edge 40',
            'Nothing Phone 2'
        ];

        for ($i = 0; $i < 10; $i++) {
            DB::table('product')->insert([
                'product_name' => $mobileProducts[array_rand($mobileProducts)], // random mobile
                'product_price' => rand(10000, 90000), // random price
                'seller_id' => rand(1, 10), // random seller id
            ]);
        }
    }
}
