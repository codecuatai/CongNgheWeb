<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->sentence,
                'brand' => $faker->words(10, true),
                'dosage' => $faker->words(5, true),
                'form' => $faker->words(5, true),
                'price' => $faker->randomFloat(2, 5, 500),
                'stock' => $faker->numberBetween(10, 500)
            ]);
        }
    }
}
