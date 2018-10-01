<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosDividendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_dividends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members')->onDelete('cascade');
            $table->integer('share_id')->unsigned()->nullable();
            $table->foreign('share_id')->references('id')->on('saccos_shares')->onDelete('cascade');
            $table->decimal('dividend_based_in_share');
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
        Schema::dropIfExists('saccos_dividends');
    }
}
