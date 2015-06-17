<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNationsTable extends Migration {

	public function up()
	{
		Schema::create('nations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('car_nation', function(Blueprint $table) {
			$table->integer('car_id')->unsigned()->index();
			$table->foreign('car_id')->references('id')->on('cars')
						->onDelete('cascade');

			$table->integer('nation_id')->unsigned()->index();
			$table->foreign('nation_id')->references('id')->on('nations')
						->onDelete('cascade');

			$table->timestamps();
			
		});
	}

	public function down()
	{
		Schema::drop('nations');
		Schema::drop('car_nation');
	}
}