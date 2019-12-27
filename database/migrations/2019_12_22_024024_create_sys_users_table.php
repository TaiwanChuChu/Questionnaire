<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SysUser', function (Blueprint $table) {
            $table->bigIncrements('SysUserID')->comment('帳號ID');
            $table->string('UserName')->nullable(false)->comment('帳號名稱');
            $table->string('PassWord')->nullable(false)->comment('密碼');
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
        Schema::dropIfExists('sys_users');
    }
}
