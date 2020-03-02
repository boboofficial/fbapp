<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies_competitions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('company_id');
          $table->unsignedBigInteger('competition_id');
          $table->timestamps();

          $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
          $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies_competitions');
    }
}
