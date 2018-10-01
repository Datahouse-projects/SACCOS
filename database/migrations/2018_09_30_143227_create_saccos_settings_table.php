<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaccosSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saccos_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salary_id')->unsigned()->nullable();
            $table->foreign('salary_id')->references('id')->on('saccos_salaries')->onDelete('cascade');
            $table->decimal('reduced_from_salary');
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
        Schema::dropIfExists('saccos_settings');
    }
}
