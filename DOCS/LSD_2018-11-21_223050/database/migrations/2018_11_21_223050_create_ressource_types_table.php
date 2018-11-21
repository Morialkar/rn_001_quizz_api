<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRessourceTypesTable extends Migration {

	public function up()
	{
		Schema::create('ressource_types', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100);
			$table->string('icon', 100);
		});
	}

	public function down()
	{
		Schema::drop('ressource_types');
	}
}