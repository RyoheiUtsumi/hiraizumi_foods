<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin; // Adminモデルをインポート
use Illuminate\Support\Facades\Hash; // パスワードのハッシュ化に使用

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// admin utsumiさんのデータを挿入
        Admin::create([
            'name' => 'admin utsumi', // 管理者の名前
            'email' => 'admin.utsumi@example.com', // 仮のメールアドレス
            'password' => Hash::make('adminpassword'), // パスワードをハッシュ化して保存
        ]);
    }
}
