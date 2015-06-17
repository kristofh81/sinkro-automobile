<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('car_id')->unsigned()->nullable();
			$table->boolean('is_main')->default(0)->nullable();
			$table->string('location')->nullable();
			$table->timestamps();

			$table->foreign('car_id')->references('id')->on('cars')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}