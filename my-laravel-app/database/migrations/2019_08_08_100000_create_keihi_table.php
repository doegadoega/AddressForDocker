<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeihiTable extends Migration {
    public function up()
    {
        Schema::create('keihi', function (Blueprint $table) {
            $table->increments('id');       // ID
            $table->char('title', 100);     // タイトル
            $table->integer('price');       // 価格
            $table->text('url');            // URL
            $table->timestamps();           // 作成時刻
        });
    }
}