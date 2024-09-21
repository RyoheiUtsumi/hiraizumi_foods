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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('id'); // 顧客ID
            $table->string('first_name', 255); // 名
            $table->string('last_name', 255); // 姓
            $table->string('email', 255)->unique(); // メールアドレス（ユニーク）
            $table->string('phone_number', 15)->nullable(); // 電話番号（null許容）
            $table->string('address', 255); // 住所
            $table->string('city', 255); // 市町村
            $table->string('state', 255); // 州または都道府県
            $table->string('postal_code', 20); // 郵便番号
            $table->string('country', 255); // 国
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
