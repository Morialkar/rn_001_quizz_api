<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChaptersTable extends Migration {

	public function up()
	{
		Schema::create('chapters', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('story_id');
			$table->string('name', 100)->default('Untitled');
			$table->longText('description');
			$table->string('image', 254);
		});
	}

	public function down()
	{
		Schema::drop('chapters');
	}
}