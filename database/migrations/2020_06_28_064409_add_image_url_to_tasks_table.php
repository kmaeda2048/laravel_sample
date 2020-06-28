<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('image_url')->after('title')->nullable();
            // $table->string('title', 50)->change();
            // $table->string('title', 50)->nullable()->change();
            // $table->renameColumn('from', 'to');
            // $table->dropColumn('title');
            // $table->dropColumn(['votes', 'avatar', 'location']);
            // $table->unique('email'); // 既存カラムにユニークキー追加
            // $table->index(['account_id', 'created_at']); // 既存カラムに複合インデックス追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
}
