<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use app\Keihi;

class KeihiSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Keihi::created([
            'id' => 1,
            'title' => 'test 123456',
            'price' => 1598,
            'url' => 'http://www.amazon.co.jp/gp/product/4774176389'
        ]);

        Keihi::create([
            'id' => 2,
            'title' => 'Docker実践入門――Linuxコンテナ技術の基礎から応用まで (Software Design plus)',
            'price' => 2894,
            'url' => 'http://www.amazon.co.jp/gp/product/4774176540'
        ]);

        Keihi::create([
            'id' => 3,
            'title' => 'HTML5 Web標準API バイブル',
            'price' => 3218,
            'url' => 'http://www.amazon.co.jp/gp/product/4774176540'
        ]);
    }
}