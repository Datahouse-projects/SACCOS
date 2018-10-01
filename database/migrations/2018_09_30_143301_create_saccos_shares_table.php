<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_shares', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount_of_share');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members')->onDelete('cascade');
            $table->date('date_opened');
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
        Schema::dropIfExists('saccos_shares');
    }
}
