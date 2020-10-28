<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentSlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_slips', function (Blueprint $table) {
            $table->integer('Term');
            $table->integer('CusID');
            $table->primary(['Term', 'CusID']);
            //$table->foreign('CusID')->references('CusID')->on('reg_clients');
            $table->String('Bank');
            $table->double('PaidAmount', 10, 2);
            $table->string('ScanCopyImg');

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
        Schema::dropIfExists('payment_slips');
    }
}
