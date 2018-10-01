<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosLoansTable extends Migration
{
    /**
     * Run the
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members');
            $table->integer('organization_id')->unsigned()->nullable();
            $table->foreign('organization_id')->references('id')->on('saccos_organizations');
            $table->integer('loans_category_id')->unsigned()->nullable();
            $table->foreign('loans_category_id')->references('id')->on('loans_categories')->onDelete('cascade');
            $table->string('member_name');
            $table->date('created_date');
            $table->time('duration');
            $table->date('issued_date');
            $table->date('end_date');
            $table->decimal('interest_per_day');
            $table->decimal('total_interest');
            $table->decimal('total_amount');
            $table->date('payment_principal');
            $table->date('payment_interest');
            $table->mediumText('loan_status');
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
        Schema::dropIfExists('saccos_loans');
    }
}
