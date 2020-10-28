<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMsgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_msgs', function (Blueprint $table) {
            $table->id("msgID");
            $table->bigInteger('UserID')->unsigned();
            $table->string('sendSub')->nullable();
            $table->text('sendMSG')->nullable();
            $table->bigInteger('ResID');
            $table->string('replySub')->nullable();
            $table->text('replyMSG')->nullable();
            $table->boolean('read')->default('0');
            $table->boolean('delete')->default('0');
            $table->datetime('sendDate')->nullable();
            $table->datetime('replyDate')->nullable();
            $table->timestamps();
        });


        Schema::table('user_msgs', function($table) {
            $table->foreign('UserID')->references('aid')->on('users')->onDelete('cascade');
            $table->index('UserID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_msgs');
    }
}
