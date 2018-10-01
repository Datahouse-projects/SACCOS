<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_first_name');
            $table->string('member_middle_name');
            $table->string('member_surname');
            $table->string('town');
            $table->string('residence');
            $table->string('occupation');
            $table->string('email');
            $table->string('country');
            $table->string('nationality');
            $table->integer('mobile_number');
            $table->date('date_of_registration');
            $table->string('passport_image');
            $table->integer('departiment_id')->unsigned()->nullable();
            $table->foreign('departiment_id')->references('id')->on('saccos_departments')->onDelete('cascade');
            $table->integer('organization_id')->unsigned()->nullable();
            $table->foreign('organization_id')->references('id')->on('saccos_organizations')->onDelete('cascade');
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
        Schema::dropIfExists('saccos_members');
    }
}
