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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('id'); // レビューID（Primary Key）
            $table->unsignedBigInteger('product_id'); // レビュー対象商品のID（Foreign Key）
            $table->unsignedBigInteger('customer_id'); // レビューをした顧客のID（Foreign Key）
            $table->integer('rating'); // 評価（1～5の数値）
            $table->text('comment'); // レビューのコメント
            $table->timestamps(); // created_at, updated_at

            // 外部キー制約
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
