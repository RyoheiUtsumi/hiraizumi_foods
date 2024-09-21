<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id'); // 商品ID（Primary Key）
            $table->string('name', 255); // 商品の名前
            $table->text('description'); // 商品の説明
            $table->decimal('price', 10, 2); // 商品の価格（小数点以下2桁まで）
            $table->integer('stock_quantity'); // 在庫の数量
            $table->string('category', 255); // 商品のカテゴリー
            $table->string('image_url', 255); // 商品画像のURL
            $table->string('make', 255); // 生産者

            // seller_id を追加して販売者とリレーションを作成
            // $table->foreignId('seller_id')
            //    ->constrained() // 'sellers' テーブルに外部キー制約をかける
            //    ->onDelete('cascade'); // 販売者が削除された場合、関連商品も削除

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */

};
