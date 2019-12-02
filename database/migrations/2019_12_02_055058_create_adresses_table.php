<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdressesTable extends Migration {

	public function up()
	{
		Schema::create('adresses', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('adresse');
			$table->string('code_postal');
			$table->string('ville');
		});
	}

	public function down()
	{
		Schema::drop('adresses');
	}
}