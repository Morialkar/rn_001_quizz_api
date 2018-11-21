<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoriesTable extends Migration {

	public function up()
	{
		Schema::create('stories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->bigInteger('created_by')->unsigned();
			$table->longText('description');
			$table->string('image', 254);
		});
	}

	public function down()
	{
		Schema::drop('stories');
	}
}