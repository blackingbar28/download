<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('metas', function (Blueprint $table) {
            $table->foreign('article_id', 'metas_ibfk_1')->references('id')->on('articles')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('link_id', 'metas_ibfk_2')->references('id')->on('links')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metas', function (Blueprint $table) {
            $table->dropForeign('metas_ibfk_1');
            $table->dropForeign('metas_ibfk_2');
        });
    }
}
