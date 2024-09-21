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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id('seller_id'); // 売り手ID（Primary Key）
            $table->string('name', 255); // 売り手の名前
            $table->string('email', 255)->unique(); // 売り手のメールアドレス（一意性制約付き）
            $table->string('password', 255); // ハッシュ化されたパスワード
            $table->string('store_name', 255)->nullable(); // 店舗名（NULLを許容）
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
