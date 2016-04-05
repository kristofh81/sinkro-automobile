<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelsTable extends Migration {

	public function up()
	{
		Schema::create('models', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('marks_id')->unsigned();
			$table->timestamps();

			$table->foreign('marks_id')->references('id')->on('marks')
						->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('models');
	}
}