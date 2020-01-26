<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_points', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('user_prediction_id');
          $table->timestamps();
          
          $table->foreign('user_prediction_id')->references('id')->on('users_predictions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('competition_points');
    }
}
