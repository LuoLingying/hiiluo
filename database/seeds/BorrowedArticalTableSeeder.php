<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BorrowedArticalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borrowed_article')
            ->insert([
                [
                    'title' => 'Ubuntu软件安装及使用心得',
                    'href' => 'https://www.linuxidc.com/Linux/2017-07/145335.htm',
                    'description' => '初始添加测试'
                ],
                [
                    'title' => 'Ubuntu16.04安装composer和 laravel',
                    'href' => 'https://blog.csdn.net/yc1022/article/details/54580716',
                    'description' => '初始添加测试'
                ]
            ]);
    }
}