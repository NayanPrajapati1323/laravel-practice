<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create('en_IN');
        for ($i = 0; $i < 10; $i++) {
            DB::table('student')->insert([
                // only alphabets in name and in email and in phone only numbers
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'phone' => $faker->numerify('##########'),
                'address' => $faker->address,
            ]);
        }
    }
}
