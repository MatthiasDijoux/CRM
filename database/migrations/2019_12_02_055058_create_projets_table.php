<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetsTable extends Migration {

	public function up()
	{
		Schema::create('projets', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('nom');
			$table->bigInteger('id_client')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('projets');
	}
}