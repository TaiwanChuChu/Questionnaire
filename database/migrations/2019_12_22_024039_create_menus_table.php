<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Menu', function (Blueprint $table) {
            $table->bigIncrements('MenuID')->comment('選單ID');
            $table->string('MenuName', '100')->comment('選單名稱');
            $table->bigInteger('UpperID')->comment('上層選單ID');
            $table->boolean('IsHide')->comment('選單隱藏狀態(0 => 顯示中，1 => 隱藏)');
            $table->boolean('Status')->comment('選單狀態(0 => 停用，1 => 使用中)');
            $table->bigInteger('Sort')->comment('排序');
            $table->string('ApplyID', '50')->comment('建立者');
            $table->string('UpdateID', '50')->comment('異動者');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
