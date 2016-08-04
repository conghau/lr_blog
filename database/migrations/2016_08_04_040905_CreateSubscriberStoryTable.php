<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriber_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('relate',500);
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
        Schema::drop('subscriber_stories');
    }
}
