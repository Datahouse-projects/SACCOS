<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned()->nullable();
            $table->foreign('loan_id')->references('id')->on('saccos_loans')->onDelete('cascade');
            $table->date('date');
            $table->string('payment_type');
            $table->string('posted_status');
            $table->string('received_by');
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
        Schema::dropIfExists('saccos_payments');
    }
}
