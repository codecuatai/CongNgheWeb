<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // 1. Lấy tất cả medicine_id hiện có từ bảng medicines
        // Đảm bảo bạn đã chạy MedicinesTableSeeder trước
        $medicineIds = DB::table('medicines')->pluck('medicine_id')->toArray();

        if (empty($medicineIds)) {
            // Nếu không có thuốc nào, không thể tạo giao dịch bán hàng
            echo "Lưu ý: Không tìm thấy ID thuốc nào trong bảng 'medicines'. Vui lòng chạy MedicinesTableSeeder trước.\n";
            return;
        }

        for ($i = 0; $i < 100; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->randomElement($medicineIds),
                'quantity' => $faker->numberBetween(1, 15),
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'customer_phone' => '0' . $faker->numerify('#########'),
            ]);
        }
    }
}
