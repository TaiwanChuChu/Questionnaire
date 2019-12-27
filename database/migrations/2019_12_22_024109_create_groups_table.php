<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Group', function (Blueprint $table) {
            $table->bigIncrements('GroupID')->comment('群組權限ID');
            $table->string('GroupName', '100')->nullable(false)->comment('群組權限名稱');
            $table->boolean('Status')->nullable(false)->default(1)->comment('群組權限狀態(0 => 停用，1 => 使用中)');
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
        Schema::dropIfExists('groups');
    }
}
