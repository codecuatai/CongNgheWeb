<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy tất cả computer_id từ bảng computers
        $computerIds = DB::table('computers')->pluck('id')->toArray();

        if (empty($computerIds)) {
            echo "⚠️ Bảng computers chưa có dữ liệu. Hãy seed bảng computers trước!\n";
            return;
        }

        // Tạo 50 issue ngẫu nhiên
        for ($i = 0; $i < 100; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->randomElement($computerIds),
                'reported_by' => $faker->name,
                'description' => $faker->paragraph(2),
                'urgency'     => $faker->randomElement(['Low', 'Medium', 'High']),
                'status'      => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
