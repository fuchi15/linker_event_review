<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('EventReview',function(Blueprint $table){
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('event_id')->on('User_Event');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('User_Event');
            $table->string('comment');
            $table->string('evaluation');
            $table->timestamps();
            $table->unique(['event_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('EventReview');
    }
}
