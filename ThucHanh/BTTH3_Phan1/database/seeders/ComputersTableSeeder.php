<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('computers')->insert([
                'computer_name'     => $faker->lexify('Computer-????'), // <= 50 ký tự
                'model'             => $faker->lexify('Model-?????'),   // <= 100 ký tự
                'operating_system'  => $faker->randomElement(['Windows 10', 'Windows 11', 'Ubuntu 22.04', 'macOS Sonoma']), // <=50 ký tự
                'processor'         => $faker->randomElement(['Intel i3', 'Intel i5', 'Intel i7', 'AMD Ryzen 5', 'AMD Ryzen 7']), // <=50 ký tự
                'memory'            => $faker->randomElement([4, 8, 16, 32, 64]), // GB
                'available'         => $faker->boolean(),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
        }
    }
}
