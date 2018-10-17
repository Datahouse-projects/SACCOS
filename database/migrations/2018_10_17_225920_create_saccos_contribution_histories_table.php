<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosContributionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_contribution_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->date('contribution_amount');
            $table->date('contribution_date');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members')->onDelete('cascade');
            $table->integer('contribution_id')->unsigned()->nullable();
            $table->foreign('contribution_id')->references('id')->on('saccos_contributions')->onDelete('cascade');
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
        Schema::dropIfExists('saccos_contribution_histories');
    }
}
