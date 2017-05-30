<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('category_id', 'articles_ibfk_1')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('link_id', 'articles_ibfk_2')->references('id')->on('links')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('articles_ibfk_1');
            $table->dropForeign('articles_ibfk_2');
        });
    }
}
