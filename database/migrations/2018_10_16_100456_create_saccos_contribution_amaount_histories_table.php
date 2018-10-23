<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosContributionAmaountHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_contribution_amaount_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('saccos_contribution_amaount_histories');
    }
}
