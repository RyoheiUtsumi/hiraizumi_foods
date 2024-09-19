<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer; // Customerモデルをインポート


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// 1人目のお客さんのデータ
        Customer::create([
            'first_name' => '宏文',
            'last_name' => '森',
            'email' => 'hirofumimori@example.com',
            'phone_number' => '09012345678',
            'address' => '123 Sakura St',
            'city' => 'Tokyo',
            'state' => 'Tokyo',
            'postal_code' => '1000001',
            'country' => 'Japan',
        ]);

        // 2人目のお客さんのデータ
        Customer::create([
            'first_name' => '寛',
            'last_name' => '亘理',
            'email' => 'kanwari@example.com',
            'phone_number' => '09087654321',
            'address' => '456 Ume St',
            'city' => 'Kyoto',
            'state' => 'Kyoto',
            'postal_code' => '6000002',
            'country' => 'Japan',
        ]);

        // 3人目のお客さんのデータ
        Customer::create([
            'first_name' => '陵平',
            'last_name' => '内海',
            'email' => 'ryoheiuchiumi@example.com',
            'phone_number' => '08011223344',
            'address' => '789 Kiku St',
            'city' => 'Osaka',
            'state' => 'Osaka',
            'postal_code' => '5300003',
            'country' => 'Japan',
        ]);

        // 4人目のお客さんのデータ
        Customer::create([
            'first_name' => 'ミンメイ',
            'last_name' => 'リン',
            'email' => 'minmeilin@example.com',
            'phone_number' => '07099887766',
            'address' => '321 Hana St',
            'city' => 'Sapporo',
            'state' => 'Hokkaido',
            'postal_code' => '0600004',
            'country' => 'Japan',
        ]);

        // 5人目のお客さんのデータ
        Customer::create([
            'first_name' => 'ランカ',
            'last_name' => 'リー',
            'email' => 'ranka.lee@example.com',
            'phone_number' => '09055443322',
            'address' => '654 Tsubaki St',
            'city' => 'Fukuoka',
            'state' => 'Fukuoka',
            'postal_code' => '8100005',
            'country' => 'Japan',
        ]);
    }
}
