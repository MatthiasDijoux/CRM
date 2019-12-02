<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeCommentaireClientsTable extends Migration {

	public function up()
	{
		Schema::create('type_commentaire_clients', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('type');
			$table->bigInteger('id_commentaire')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('type_commentaire_clients');
	}
}