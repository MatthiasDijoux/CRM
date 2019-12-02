<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('nom');
			$table->string('prenom');
			$table->integer('tel');
			$table->string('email');
			$table->string('poste');
			$table->bigInteger('id_client')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('contacts');
	}
}