<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seller; // Sellerモデルをインポート
use Illuminate\Support\Facades\Hash; // パスワードのハッシュ化に使用

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 // 松本英之さんのデータを挿入
        Seller::create([
            'name' => '松本英之',
            'email' => 'hideyuki.matsumoto@example.com', // 仮のメールアドレスを使用
            'password' => Hash::make('password123'), // パスワードをハッシュ化して保存
            'store_name' => '松本商店', // 店舗名 (NULL許容なので、店舗名がない場合はNULLも可)
        ]);
    }
}
