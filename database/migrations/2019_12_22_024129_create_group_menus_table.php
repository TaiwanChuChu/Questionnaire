<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GroupMenu', function (Blueprint $table) {
            $table->bigIncrements('GroupMenuID')->comment('群組&選單關聯ID');
            $table->bigInteger('GroupID')->nullable(false)->comment('群組權限ID');
            $table->bigInteger('MenuID')->nullable(false)->comment('選單ID');
            $table->boolean('Status')->nullable(false)->default(1)
                ->comment('使用狀態(0 => 停用，1 => 使用中)');
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
        Schema::dropIfExists('group_menus');
    }
}
