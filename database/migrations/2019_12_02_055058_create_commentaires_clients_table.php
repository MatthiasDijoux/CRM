<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesClientsTable extends Migration {

	public function up()
	{
		Schema::create('commentaires_clients', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('commentaire');
			$table->bigInteger('id_client')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('commentaires_clients');
	}
}