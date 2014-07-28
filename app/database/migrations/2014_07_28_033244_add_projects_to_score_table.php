<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsToScoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('scores', function(Blueprint $table)
	{
			$table->integer('project_id')->nullable();
			$table->foreign('project_id')->references('id')->on('projects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('scores', function(Blueprint $table)
		{
			$table->dropForeign('scores_project_id_foreign');
			$table->dropColumn('project_id');
		});
	}

}
