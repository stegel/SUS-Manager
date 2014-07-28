<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores', function($table)
		{
			$table->increments('id');
			$table->tinyInteger('q1');
			$table->tinyInteger('q2');
			$table->tinyInteger('q3');
			$table->tinyInteger('q4');
			$table->tinyInteger('q5');
			$table->tinyInteger('q6');
			$table->tinyInteger('q7');
			$table->tinyInteger('q8');
			$table->tinyInteger('q9');
			$table->tinyInteger('q10');
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
		Schema::drop('scores');
	}

}
