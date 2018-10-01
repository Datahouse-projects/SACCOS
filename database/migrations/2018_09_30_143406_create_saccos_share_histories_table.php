<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosShareHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_share_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('share_id')->unsigned()->nullable();
            $table->foreign('share_id')->references('id')->on('saccos_shares')->onDelete('cascade');
            $table->date('started_date');
            $table->date('end_date');
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
        Schema::dropIfExists('saccos_share_histories');
    }
}
