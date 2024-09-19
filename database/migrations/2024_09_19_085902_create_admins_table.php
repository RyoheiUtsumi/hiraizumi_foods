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
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id'); // 管理者ID（Primary Key）
            $table->string('name', 255); // 管理者の名前
            $table->string('email', 255)->unique(); // 管理者のメールアドレス（一意性制約付き）
            $table->string('password', 255); // ハッシュ化されたパスワード
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
