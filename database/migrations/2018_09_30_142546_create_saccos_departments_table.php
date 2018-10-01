<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departiment_name');
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
        Schema::dropIfExists('saccos_departments');
    }
}
