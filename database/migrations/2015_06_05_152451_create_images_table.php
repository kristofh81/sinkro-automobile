<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->string('location')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}