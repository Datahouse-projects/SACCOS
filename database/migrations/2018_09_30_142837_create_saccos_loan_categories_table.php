<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosLoanCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_loan_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('fine_rate');
            $table->decimal('interest_per_day');
            $table->decimal('loan_amount');
            $table->time('duration_minimum');
            $table->time('duration_maximum');
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
        Schema::dropIfExists('saccos_loan_categories');
    }
}
