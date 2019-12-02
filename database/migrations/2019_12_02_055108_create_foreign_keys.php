<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('clients', function(Blueprint $table) {
			$table->foreign('id_adresses')->references('id')->on('adresses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->foreign('id_client')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('commentaires_clients', function(Blueprint $table) {
			$table->foreign('id_client')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projets', function(Blueprint $table) {
			$table->foreign('id_client')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('type_commentaire_clients', function(Blueprint $table) {
			$table->foreign('id_commentaire')->references('id')->on('commentaires_clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('clients', function(Blueprint $table) {
			$table->dropForeign('clients_id_adresses_foreign');
		});
		Schema::table('contacts', function(Blueprint $table) {
			$table->dropForeign('contacts_id_client_foreign');
		});
		Schema::table('commentaires_clients', function(Blueprint $table) {
			$table->dropForeign('commentaires_clients_id_client_foreign');
		});
		Schema::table('projets', function(Blueprint $table) {
			$table->dropForeign('projets_id_client_foreign');
		});
		Schema::table('type_commentaire_clients', function(Blueprint $table) {
			$table->dropForeign('type_commentaire_clients_id_commentaires_foreign');
		});
	}
}