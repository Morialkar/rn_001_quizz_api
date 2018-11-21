<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRessourcesTable extends Migration {

	public function up()
	{
		Schema::create('ressources', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('ressource_type_id');
			$table->bigInteger('user_id');
			$table->bigInteger('amount');
		});
	}

	public function down()
	{
		Schema::drop('ressources');
	}
}