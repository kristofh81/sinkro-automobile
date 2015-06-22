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
			//$table->integer('model_id')->unsigned()->nullable();
		});

		Schema::create('car_mark', function(Blueprint $table) {
			$table->integer('car_id')->unsigned()->index();
			$table->foreign('car_id')->references('id')->on('cars')
						->onDelete('cascade');

			$table->integer('mark_id')->unsigned()->index();
			$table->foreign('mark_id')->references('id')->on('marks')
						->onDelete('cascade');

			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('marks');
		Schema::drop('car_mark');
	}
}