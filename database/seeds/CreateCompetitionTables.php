<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Competition;
class CreateCompetitionTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(!Schema::hasTable('euro20')) {
    		Schema::create('euro20', function (Blueprint $table) {
	      	$table->bigIncrements('id');
	        $table->unsignedBigInteger('competition_id');
	        $table->string('team1');
	        $table->string('team2');
	        $table->string('phase')->nullable();
	        $table->string('team1_score')->nullable();
	        $table->string('team2_score')->nullable();
	        $table->dateTime('start_date')->nullable();
	        $table->timestamps();
	      });
    	}

    	$competition = Competition::firstOrCreate(['name' => 'Euro 2020']);

    	$euroMatches = [['competition_id' => $competition->id, 'team1' => 'Turkey', 'team2' => 'Italy','start_date' => '2020-06-12'],
										 	['competition_id' => $competition->id, 'team1' => 'Wales', 'team2' => 'Switzerland', 'start_date' => '2020-06-13'],];
		 	foreach($euroMatches AS $match) {
		 		DB::table('euro20')->insert($match);
		 	}
    }
}
