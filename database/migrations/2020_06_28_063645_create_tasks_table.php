<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            // $table->string('title', 100); // 文字長を指定したVARCHARカラム
            // $table->foreignId('user_id');
            // $table->foreignId('user_id')->constrained(); // constrainedがuser_idからuserテーブルのidカラムを指していると解釈してくれる
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            // $table->foreignId('user_id')->nullable()->constrained(); // 追加のカラム修飾子はconstrainedより前に呼び出す
            // $table->string('title')->nullable();
            // $table->string('body')->after('title');
            // $table->string('title')->default($value);
            // $table->string('email')->unique();
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
        Schema::dropIfExists('tasks');
    }
}
