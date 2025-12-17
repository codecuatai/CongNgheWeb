<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'username' => $faker->userName(),
                'email' => $faker->email(),
                'password' => bcrypt('password123'),
                'role' => $faker->randomElement(['admin', 'user', 'moderator']),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
