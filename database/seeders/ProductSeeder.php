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
            'price' => 1500,
            'stock_quantity' => 100,
            'category' => 'フルーツ',
            'image_url' => asset('storage/images/hira_strawberry.png'),
            'make' => '松本さん',
            'seller_id' => 1, // 適切な seller_id を指定
        ]);
// 商品データを登録
        Product::create([
            'name' => '松本さんの「えごま油」',
            'description' => 'まつもとさんが今日圧搾した「えごま油」です',
            'price' => 2400,
            'stock_quantity' => 100,
            'category' => '食品',
            'image_url' =>  asset('storage/images/egoma_oil.png'), // 画像URL
            'make' => '松本さん',
            'seller_id' => 1, // 適切な seller_id を指定
        ]);

        Product::create([
            'name' => '松本さんの「鶏ジャーキー」',
            'description' => '作りたて！松本さんの鶏ジャーキーです',
            'price' => 1000,
            'stock_quantity' => 100,
            'category' => '食品',
            'image_url' =>  asset('storage/images/chicken.png'), // 画像URL
            'make' => '松本さん',
            'seller_id' => 1, // 適切な seller_id を指定
        ]);

        Product::create([
            'name' => '松本さんの「うめぼし」',
            'description' => '作りたて！松本さんの梅干しです',
            'price' => 1100,
            'stock_quantity' => 100,
            'category' => '食品',
            'image_url' =>  asset('storage/images/ume.png'), // 画像URL
            'make' => '松本さん',
            'seller_id' => 1, // 適切な seller_id を指定
        ]);

    }
}
