<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contribution_name');
            $table->integer('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('saccos_members');
            $table->integer('organization_id')->unsigned()->nullable();
            $table->foreign('organization_id')->references('id')->on('saccos_organizations')->onDelete('cascade');
            $table->decimal('contribution_amount');
            $table->date('contribution_started_date');
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
        Schema::dropIfExists('saccos_contributions');
    }
}
