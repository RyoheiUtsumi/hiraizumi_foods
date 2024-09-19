<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Productモデルをインポート

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// 商品データを挿入
        Product::create([
            'name' => '平泉べにしずか',
            'description' => '新鮮で甘みのある平泉産のいちご、べにしずか。',
            'price' => 1500.00,
            'stock_quantity' => 100,
            'category' => 'フルーツ',
            'image_url' => 'images/benishizuka.jpg',
        ]);
    }
}
