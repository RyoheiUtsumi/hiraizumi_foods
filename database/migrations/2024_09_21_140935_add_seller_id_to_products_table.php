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
        Schema::table('products', function (Blueprint $table) {
            // カラム追加
            $table->BigInteger('seller_id')->unsigned()->after('name');
            // カラムの外部キー制約追加
            $table->foreign('seller_id')->references('seller_id')->on('sellers')->OnDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // 外部キー制約の削除
            $table->dropForeign('products_seller_id_foreign');
            // カラムの削除
            $table->dropColumn('seller_id');
        });
    }
};
