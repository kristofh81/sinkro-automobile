<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	public function up()
	{
		Schema::create('cars', function(Blueprint $table) {
			$table->increments('id');
			$table->string('category')->nullable();
			$table->string('type', 32)->index();
			$table->integer('potency')->nullable();
			$table->integer('mileage');
			$table->string('doors')->nullable();
			$table->string('gears')->nullable();
			$table->string('fuel_type')->nullable();
			$table->string('cilinders', 6)->nullable();
			$table->date('immatriculation_date')->nullable();
			$table->date('revision_expiry_date')->nullable();
			$table->date('bollino_blu_expiry_date')->nullable();
			$table->string('total_owners')->nullable();
			$table->boolean('accident_history')->nullable();
			$table->boolean('travel_ability')->nullable();
			$table->string('insert_code')->nullable();
			$table->string('vin', 32)->nullable();
			$table->date('availability_period')->nullable();
			$table->text('description');
			$table->integer('price')->index();
			$table->integer('price_b2b')->nullable();
			$table->integer('models_id')->unsigned()->nullable();
			$table->integer('versions_id')->unsigned()->nullable();
			$table->integer('colors_id')->unsigned()->nullable();
			$table->integer('consumptionemissions_id')->unsigned();
			$table->integer('characteristics_id')->unsigned()->nullable();
			$table->boolean('publish_flag')->default(0)->nullable();
			$table->boolean('reserved_flag')->default(0)->nullable();
			$table->integer('images_id')->unsigned()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cars');
	}
}