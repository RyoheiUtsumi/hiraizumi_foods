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
            $table->id('product_id'); // 商品ID（Primary Key）
            $table->string('name', 255); // 商品の名前
            $table->text('description'); // 商品の説明
            $table->decimal('price', 10, 2); // 商品の価格（小数点以下2桁まで）
            $table->integer('stock_quantity'); // 在庫の数量
            $table->string('category', 255); // 商品のカテゴリー
            $table->string('image_url', 255); // 商品画像のURL
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
