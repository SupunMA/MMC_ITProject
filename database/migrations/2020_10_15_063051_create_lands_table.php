<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id("landID");
            $table->bigInteger('UserID')->unsigned();
            $table->string('perches')->nullable();
            $table->text('valueOfLand')->nullable();
            $table->string('MapLocation')->nullable();
            $table->string('LandImages')->nullable();
            $table->boolean('saleable')->default('0');
            $table->datetime('LandDate')->nullable();
            $table->timestamps();
        });


        Schema::table('lands', function($table) {
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
        Schema::dropIfExists('lands');
    }
}
