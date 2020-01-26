<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitionTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(!Schema::hasTable('euro20')){
    		Schema::create('euro20', function (Blueprint $table) {
	      	$table->bigIncrements('id');
	        $table->unsignedBigInteger('competition_id');
	        $table->string('team1');
	        $table->string('team2');
	        $table->string('phase')->nullable();
	        $table->string('team1_score');
	        $table->string('team2_score');
	        $table->dateTime('start_date');
	        $table->timestamps();
	      });
    	}
    }
}
