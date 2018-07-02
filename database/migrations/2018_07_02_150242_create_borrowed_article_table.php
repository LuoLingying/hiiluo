<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowedArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowed_article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content')->default('');
            $table->string('description')->default('');
            $table->string('tag');
            $table->integer('type')->unsigned()->default(1);
            $table->integer('created_at')->default(0);
            $table->integer('uptated_at')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowed_article');
    }
}
