<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScenesTable extends Migration {

	public function up()
	{
		Schema::create('scenes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('chapter_id');
			$table->string('background', 254);
			$table->json('dialogs');
		});
	}

	public function down()
	{
		Schema::drop('scenes');
	}
}