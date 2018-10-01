<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosShareContributionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_share_contribution_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members')->onDelete('cascade');
            $table->integer('contribution_id')->unsigned()->nullable();
            $table->foreign('contribution_id')->references('id')->on('saccos_contributions')->onDelete('cascade');
            $table->date('contribution_start_date');
            $table->date('contribution_end_date');
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
        Schema::dropIfExists('saccos_share_contribution_histories');
    }
}
