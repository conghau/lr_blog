<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag', 100);
            $table->string('source', 255);
            $table->string('type', 255);
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->timestamps();
            $table->boolean('status')->default(FALSE);
            $table->boolean('allow_comment')->default(TRUE);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stories');
    }
}
