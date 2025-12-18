<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy tất cả ID lớp từ bảng classes
        $classIds = DB::table('classes')->pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->words(2, true),
                'last_name' => $faker->words(2, true),
                'date_of_birth' => now(),
                'parent_phone' => '0' . $faker->numerify('#########'),
                'class_id'     => $faker->randomElement($classIds),
                'created_at'   => now(),
                'updated_at'   => now()
            ]);
        }
    }
}
