<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('自增长 id');
            $table->string('name')->comment('用户名称');
            $table->string('email')->unique()->comment('用户邮箱,unique指定该字段的值为唯一值');
            $table->timestamp('email_verified_at')->nullable()->comment('空的话意味着还未验证邮箱');
            $table->string('password')->comment('用户密码');
            $table->rememberToken()->comment('保存『记住我』的相关信息');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
