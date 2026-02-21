<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'city' => $faker->city(),
                'country' => $faker->country(),
                'address' => $faker->address(),
                'zip_code' => rand(100000, 999999),
                'phone' => rand(1000000000, 9999999999),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'age' => rand(18, 60),
                'salary' => rand(10000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
