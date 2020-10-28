<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatecustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id("cid");
            $table->bigInteger('bid')->unsigned();
            $table->string('FullName');
            $table->string('nameWithIn')->nullable();
            $table->string('photo')->default('avatar.png');
            $table->string('address');
            $table->date('DOB');
            $table->integer('mobile')->default('0');
            $table->string('email')->unique();
            $table->integer('nic')->unique();
            $table->integer('status_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('TakenALoan')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('customers', function($table) {
            $table->foreign('bid')->references('bid')->on('branches')->onDelete('cascade');
            $table->index('bid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
