<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // パスワード暗号化のために追加

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 必須の3つの値を、テーブルの正確なカラム名で登録します。
        DB::table('users')->insert([
            'username' => 'Admin User', // ★ マイグレーションに合わせて'username'を使用
            'mail' => 'admin@example.com', // ★ マイグレーションに合わせて'mail'を使用

            // パスワードをHash::make()で暗号化して登録
            'password' => Hash::make('password'),

            // 以下の任意カラムは省略してもDBのデフォルト値が適用されますが、
            // 実行を確実にするため、明示的に登録しても構いません。
            // 'bio' => 'システム管理者アカウントです',
            // 'images' => 'icon1.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
