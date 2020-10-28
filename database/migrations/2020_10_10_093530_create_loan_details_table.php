<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id("LoanID");
            $table->bigInteger('cid')->unsigned();
            $table->float('LoanAmount');
            $table->float('IntRate');
            $table->float('lateRate');
            $table->date('loanDate');

            $table->timestamps();
        });

        Schema::table('loan_details', function($table) {
            $table->foreign('cid')->references('cid')->on('customers')->onDelete('cascade');
            $table->index('cid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_details');
    }
}
