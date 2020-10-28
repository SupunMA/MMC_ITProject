<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('aid');
            $table->bigInteger('bid')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->integer('status_id')->nullable();
            $table->date('DOB');
            $table->integer('nic')->unique();
            $table->integer('mobile');
            $table->string('address');
            $table->string('photo')->default('avatar.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
        });

        Schema::table('users', function($table) {
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
        Schema::dropIfExists('users');
    }
}
