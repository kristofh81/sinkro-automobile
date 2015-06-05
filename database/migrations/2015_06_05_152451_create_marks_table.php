<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarksTable extends Migration {

	public function up()
	{
		Schema::create('marks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->integer('model_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('marks');
	}
}